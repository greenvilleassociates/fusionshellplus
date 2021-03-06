<?php

/**
 * PluginLikeOnComment
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class PluginLikeOnComment extends BaseLikeOnComment {

    public function getEmployeeFirstLastName() {
        if ($this->getEmployeeNumber() != '') {
            $employee = $this->getEmployeeLike()->getFirst();
            if($employee instanceof Employee) {
                return $employee->getFirstAndLastNames();
            } else {
                return '('.__('Deleted Employee').')';
            }

        } else {
            return 'Admin';
        }
    }
    
    public function getDate(){
        return set_datepicker_date_format($this->getLikeTime());
    }
    
    public function getTime(){
        return date('h:i a', strtotime($this->getLikeTime()));;
    }

}
