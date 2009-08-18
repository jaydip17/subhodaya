<?php
class CI_Paginationnew {
    
    var $limit = 10;                                // how many per page
    var $select_what = '*';                         // what to select
    var $add_query = '';
    var $otherParams = '';
    /* customize links */
    var $first_r = 'FIRST';
    var $next_r  = '>';
    var $previous_r = '<';
    var $last_r = 'LAST';
    
    function getQuery($return_q=FALSE)
    {
        $CI =& get_instance();
        
        $query = $CI->db->query('SELECT SQL_CALC_FOUND_ROWS '.$this->select_what.''
            .$this->add_query.''
               . ' LIMIT '.$this->start.', '.$this->limit.'');
               
        $nbItems = $CI->db->call_function('result', $CI->db->call_function('query', 'SELECT FOUND_ROWS() AS nbr'), 0, 'nbr');
        if($nbItems > ($this->start + $this->limit))
        {
            $final = $this->start + $this->limit;
        }
        else {
            $final = $nbItems;
        }
        if($return_q==FALSE)
        {
            return $nbItems;
        }
        else {
            return $query;
        }
    }
    
    
    function paginate() {

            $nbItems =  $this->nbItems;
            $allPages = ceil($nbItems/$this->limit);        
            $currentPage = floor($this->start/$this->limit) + 1;        
            $pagination = "";
            if ($allPages>10) {
                $maxPages = ($allPages>9) ? 9 : $allPages;
        
                if ($allPages>9) {
                    if ($currentPage>=1&&$currentPage<=$allPages) {
                        $pagination .= ($currentPage>4) ? " ... " : " ";
        
                        $minPages = ($currentPage>4) ? $currentPage : 5;
                        $maxPages = ($currentPage<$allPages-4) ? $currentPage : $allPages - 4;
        
                        for($i=$minPages-4; $i<$maxPages+5; $i++) {
                            $pagination .= ($i == $currentPage) ? "<a href=\"#\" class=\"current\">".$i."</a> " : "<a href=\"".$this->filePath."/".(($i-1)*$this->limit).'\')'.$this->otherParams."\">".$i."</a> ";
                        }
                        $pagination .= ($currentPage<$allPages-4) ? " ... " : " ";
                    } else {
                        $pagination .= " ... ";
                    }
                }
            } else {
                for($i=1; $i<$allPages+1; $i++) {
                    $pagination .= ($i==$currentPage) ? "<a href=\"#\" class=\"current\">".$i."</a> " : "<a href=\"".$this->filePath."/".(($i-1)*$this->limit).'\')'.$this->otherParams."\">".$i."</a> ";
                }
            }
        
            if ($currentPage>1)
            {
                $pagination = "<a href=\"".$this->filePath."/0')".$this->otherParams."\">".$this->first_r."</a>"
                            . " <a href=\"".$this->filePath."/".(($currentPage-2)*$this->limit).'\')'.$this->otherParams."\">"
                            . "".$this->previous_r."</a> ".$pagination;
            }
            if ($currentPage<$allPages)
            {
                $pagination .= "<a href=\"".$this->filePath."/".($currentPage*$this->limit).$this->otherParams."\">"
                             . "".$this->next_r."</a> <a href=\"".$this->filePath."/".(($allPages-1)*$this->limit).'\')'.$this->otherParams."\">"
                             . "".$this->last_r."</a>";
            }
    
        return '<div class="pages">' . $pagination . '</div>';
    }
    function paginate1() {

            $nbItems = CI_Paginationnew::getQuery(FALSE);            
            $allPages = ceil($nbItems/$this->limit);        
            $currentPage = floor($this->start/$this->limit) + 1;        
            $pagination = "";
            if ($allPages>10) {
                $maxPages = ($allPages>9) ? 9 : $allPages;
        
                if ($allPages>9) {
                    if ($currentPage>=1&&$currentPage<=$allPages) {
                        $pagination .= ($currentPage>4) ? " ... " : " ";
        
                        $minPages = ($currentPage>4) ? $currentPage : 5;
                        $maxPages = ($currentPage<$allPages-4) ? $currentPage : $allPages - 4;
        
                        for($i=$minPages-4; $i<$maxPages+5; $i++) {
                            $pagination .= ($i == $currentPage) ? "<a href=\"#\" class=\"current\">".$i."</a> " : "<a href=\"".$this->filePath."/".(($i-1)*$this->limit).$this->otherParams."\">".$i."</a> ";
                        }
                        $pagination .= ($currentPage<$allPages-4) ? " ... " : " ";
                    } else {
                        $pagination .= " ... ";
                    }
                }
            } else {
                for($i=1; $i<$allPages+1; $i++) {
                    $pagination .= ($i==$currentPage) ? "<a href=\"#\" class=\"current\">".$i."</a> " : "<a href=\"".$this->filePath."/".(($i-1)*$this->limit).$this->otherParams."\">".$i."</a> ";
                }
            }
        
            if ($currentPage>1)
            {
                $pagination = "<a href=\"".$this->filePath."/0".$this->otherParams."\">".$this->first_r."</a>"
                            . " <a href=\"".$this->filePath."/".(($currentPage-2)*$this->limit).$this->otherParams."\">"
                            . "".$this->previous_r."</a> ".$pagination;
            }
            if ($currentPage<$allPages)
            {
                $pagination .= "<a href=\"".$this->filePath."/".($currentPage*$this->limit).$this->otherParams."\">"
                             . "".$this->next_r."</a> <a href=\"".$this->filePath."/".(($allPages-1)*$this->limit).$this->otherParams."\">"
                             . "".$this->last_r."</a>";
            }
    
        return '<div class="pages">' . $pagination . '</div>';
    }
    
    
    
} 
?>