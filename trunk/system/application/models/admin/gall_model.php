<?php
 class Gall_Model extends Model {
 	function Gall_Model()
 	{
 		parent::Model();
 	}
   
 	function addCategeory($catname,$parentid,$type="")
 	{
 	  $this->db->insert('gallery_categeory',array('catname' =>$catname ,
 	  'parentid'=> $parentid));
 	}
  	
  	function Categeory($parentid)
	{
	  $this->db->where('parentid',$parentid);
	  $query = $this->db->get('gallery_categeory');
	  $cat = $query->result();
      if($parentid ==0){
      $options[0] = 'Root';
      }
      else
	  {
        $options[0] = 'Select';
      }
	
	  foreach($cat as $row)
        {
       	$options[$row->id]= $row->catname;
        }
        return $options;
   	}	
 	function categeoryview($parentid,$num,$offset)
    {
		$this->db->where('parentid',$parentid);
		$query = $this->db->get('gallery_categeory',$num, $offset);
		return $query;
	}
	
	function isrootcategeory($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('gallery_categeory');
		$result = $query->result();
		if($result[0]->parentid == 0)
		{
		return true;		
	    }
	    else 
		{
	     return false;
	    }
	}
	function deletecategeory($id)
 	{
 		$this->db->where('id',$id);
 		$this->db->delete('gallery_categeory');
 	}
  	function deletesubcategeory($id)
    {
 		$this->db->where('parentid',$id);
 		$this->db->delete('gallery_categeory');
 	}
  	function cat($id)
  	{
  		$this->db->where('id',$id);
 		$query = $this->db->get('gallery_categeory');
 		return $query;
  	}
  	function get_movies($cat = 'movies')
	{
		 $query = "SELECT a.catname,a.id FROM
 				 gallery_categeory a , gallery_categeory b 
 				 where a.parentid = b.id  and b.catname = '$cat' order by a.id desc";	 
 		$result = $this->db->query($query);
 		return $result->result();
	}
	 function uploadzipfile($title,$active,$parentid)
	 {
	  $this->load->helper('date');
	  $foldername = now();
	  $this->load->library('image_lib');
		$config['image_library']='gd2';
		$config['upload_path'] = './assets/gallery/';
		$config['allowed_types']='zip';
		$this->load->library('upload');
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('image0'))
		{
			echo $this->upload->display_errors();
		}
		else
		{
			$data = $this->upload->data();
			$this->unzip_file($data['file_name'],$foldername);
			$values = array (
						'categoryid'	=> $parentid,
						 'title'        => $title,
						'imagepath'		=> $foldername,
						'ipaddress'		=> $this->input->ip_address(),
						'active'		=> $active,
						);
            $query=$this->db->insert('gallery_images1',$values);
			if($query)
			{
			  $msg='Zip File Uploaded Successfully';
			  $this->session->set_flashdata('message',$msg);
			}
			$this->db->where('categoryid',$parentid);
			$this->db->where('imagepath',$foldername);
			$query=$this->db->get('gallery_images1');
			$result=$query->result();
			 $images_list = directory_map('./assets/gallery/'.$foldername);
			  $totimgs = count($images_list);
			  for($i=0;$i<$totimgs;$i++)
				{
					if($images_list!='Thumbs.db')
					{
						$image_path=substr($images_list[$i], 0, -4); 

					$image_array = array('image_path' 	=> $image_path,
										 'cat_id' 		=> $result[0]->categoryid,
										'folder_path'	=> $result[0]->imagepath
										);
					}
					if(is_array($image_array))
					{
						
						$this->db->insert('gall_image_path', $image_array);
					}
				} 
			redirect('admin/gall/root_forimages',$msg);			
				//$this->add_images($values,$sub_cat,$foldername);
				//$this->add_imagepath($sub_cat,$dt,$foldername);
	 }
	 }
  	function unzip_file($filename,$foldername)
	{
		$this->load->helper('date');
		$foldername = now();
		if(file_exists("./assets/gallery/".$foldername))
		{
			echo "folder already exists";
		}
		else 
		{
			if(!mkdir("./assets/gallery/".$foldername,0777))
			$message = "Unable to create dir ".$foldername;
		}
		$config['fileName']  = './assets/gallery/'.trim($filename);
		$targetdir = './assets/gallery/'.$foldername;
		$config['targetDir'] = $targetdir;
		$this->load->library('unzip');
		$this->load->helper('directory');
		$this->unzip->initialize($config); 
		$this->unzip->unzipAll();
			
				$this->load->helper('directory');
				$map = directory_map($targetdir);
				$count = 1;
							
				foreach ($map as $imagename):
				$this->thumbnail_creation($foldername,$imagename,$count);
				$count++;
				endforeach;
				return $foldername;
				
		echo $this->unzip->display_errors(2);
        echo $this->unzip->display_errors(1);
    }
	function thumbnail_creation($foldername,$filename,$count)
	{
		//echo $foldername;
		if(file_exists("./assets/gallery/thumbnail_images/".$foldername))
		{
			echo "";
		}
		else 
		{
			if(!mkdir("./assets/gallery/thumbnail_images/".$foldername,0777))
			echo $message = "Unable to create dir ".$foldername;
		}
		$this->load->library('image_lib');
		$source_image = './assets/gallery/'.trim($foldername).'/'.trim($filename);
		$config1['image_library'] = 'gd2';
		$config1['source_image'] = $source_image;
		$config1['new_image']='./assets/gallery/thumbnail_images/'.trim($foldername).'/'.trim($filename);
		$config1['create_thumb'] = TRUE;
		$config1['maintain_ratio'] = TRUE;
		$config1['width'] = 135;
		$config1['height'] = 155;
		$this->image_lib->initialize($config1); 
		if(!$this->image_lib->resize())
		{
			$error=$this->image_lib->display_errors('<p>','</p>');
			echo $error;
			return false;
		}
		$this->image_lib->clear();
	}
 		
    function subcat($uriseg)
	{
		$this->db->where('parentid',$uriseg);
		$this->db->limit(4);
		$query =$this->db->get('gallery_categeory');
		if(!empty($query->result))
		print_r($query->result);
		return $query;
	}
	
 	function editcategeory($id,$catname)
 	{
 		$this->db->where('id',$id);
 		$this->db->update('gallery_categeory',array('catname' => $catname));
 	}
    
    function image_view($parentid)
    {
    	$this->db->where('categoryid',$parentid);
    	$query = $this->db->get('gallery_images1');
    	return $query;
    }
    
     function imageedit($uriseg)
     {
     	$this->db->where('id',$uriseg);
 		$query=$this->db->get('gallery_images1');
 		return $query->result();
     }
     
    function editimage($id,$title,$active)
    {
       	$this->db->where('id',$id);
 		$this->db->update('gallery_images1',array('title' => $title,'active'=>$active));
 	}
    function deleteimage($id)
 	{ 		
 		unlink('./assets/gallery/image'.$id.'.jpg');
 		unlink('./assets/gallery/image'.$id.'_thumb.jpg');
 		$this->db->where('id',$id);
 		$this->db->delete('gallery_images1');
  	}
  	//get categeories for main page
	function get_categeory()
	{
		$this->db->order_by('id','desc');
		$this->db->where('parentid',0);
		$query=$this->db->get('gallery_categeory');
		return $query->result();
	}
	function get_cateimage($type,$limit)
	{
		if(isset($limit))
		{
			$this->db->limit($limit);
		}
		$this->db->order_by('id','desc');
		$array=array('parentid'=>$type);
		$this->db->where($array);
		$quary=$this->db->get('gallery_categeory');
		return $quary->result();
	}
	function getimage($parentid)
	{
		$this->db->order_by('gall_image_path.id','desc');
		$this->db->limit(1);
		$array=array('cat_id'=>$parentid);
		$this->db->where($array);
		$this->db->from('gallery_categeory');
		$this->db->join('gall_image_path', 'gall_image_path.cat_id= gallery_categeory.id');
		$query = $this->db->get_where();
		return $query->row();
	}
  	function get_subcate()
  	{
  		$id=0;
  		$this->db->where('parentid !=', $id);
  		$this->db->order_by('id','desc');
		$quary=$this->db->get('gallery_categeory');
		return $quary->result();
  	}
  	function get_subcate1()
	{
  		$id=0;
  		$this->db->where('parentid !=', $id);
  		$this->db->order_by('id','desc');
  		$this->db->limit(20);
		$quary=$this->db->get('gallery_categeory');
		return $quary->result();
  	}
  	function get_gallery($type)
  	{
  		$this->db->where('cat_id',$type);
  		$quary=$this->db->get('gall_image_path');
  		return $quary->result();
  	}
  	function count($id)
  	{
  		$this->db->like('cat_id',$id);
		$this->db->from('gall_image_path');
		$count =$this->db->count_all_results();
		return $count;
  	}
   	function count1($type)
  	{
  		$this->db->like('parentid',$type);
		$this->db->from('gallery_categeory');
		$count =$this->db->count_all_results();
		return $count;
  	}
  	function get_image($id)
  	{
  		$this->db->where('id',$id);
  		$this->db->select('id, parentid, title');
  		$query=$this->db->get_where('gallery_images1');
  		return $query->result();
  	}
 	function getimage1()
	{
		$this->db->order_by('id','desc');
		$this->db->limit(4);
		$array=array('active'=>1);
		$this->db->where($array);
		$query=$this->db->get('gallery_images1');
		return $query->result_array();
	}
 	function gallery_pagi($type)
	{
		$query="from gall_image_path where cat_id=$type order by gall_image_path.id desc";
		return $query;
	}
  	function gallery_pagi1($type)
	{
		/*$this->db->order_by('id','desc');
		$this->db->select('id,title','parentid');
		$this->db->limit(1);
		$array=array('parentid'=>$parentid);
		$this->db->where($array);
		$query=$this->db->get('gallery_images'); */
		$query="from gallery_images1 where parentid=$type order by gallery_images1.id desc";
		return $query;
	}
	function get_allimages($parentid)
	{
		$this->db->where('parentid',$parentid);
  		$this->db->select('id, parentid, title');
  		$query=$this->db->get_where('gallery_images1');
  		return $query;	
	}
	function get_views($id)
	{
		$this->db->where('id',$id);
  		$this->db->select('id, views');
  		$query=$this->db->get_where('gallery_images1');
  		$result=$query->result();
		$pre_views=$result['0']->views;
				 $id=$result['0']->id;
		$this->insert_views($id,$pre_views);
	}
	function insert_views($id,$pre_views)
	{
		$this->db->where('id', $id);
		$views=$pre_views+1;
		$data=array('gallery_images.views'=>$views);
		$query=$this->db->update('gallery_images1', $data);
	}
	function top_views()
	{
		$this->db->order_by('views','desc');
		$this->db->order_by('id','desc');
		$this->db->limit(3);
  		$this->db->select('id, parentid, title,views');
  		$query=$this->db->get_where('gallery_images1');
  		return $query->result();
	}
    function get_root_cat_by_id($id)
    {
    	$this->db->where('id',$id);
    	$rs = $this->db->get('gallery_categeory');
    	$result = $rs->row();
    }
    function get_root_cat_by_id1($id)
    {
    	$this->db->where('id',$id);
    	$rs = $this->db->get('gallery_categeory');
    	$result = $rs->row();
    	print_r($result->catname);
    	return $result->catname;
    }
    function get_cat_title($cat_id)
    {
    	$this->db->where('id',$cat_id);
    	$this->db->select('catname');
    	$query=$this->db->get('gallery_categeory');
    	return $query->result();	
    }
}
?>