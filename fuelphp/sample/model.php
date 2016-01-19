<?php

class Model_Enrollment extends Model{

  public static function getClasses(){
    $query = DB::query('SELECT csid,name FROM courses');
    return $query->execute()->as_array();
  }

  public static function getStudents($selected_csid){
   $sql=<<<EOM
     SELECT s.stid as stid, s.major as major, s.name as name, e.grade as grade
     FROM enrollments e, students s
     WHERE s.stid = e.stid
       and e.csid = '$selected_csid'
     ORDER BY s.major, s.stid;
EOM;
     $query = DB::query($sql);
     return $query->execute()->as_array();
     
  }

  public static function getCoursename($selected_csid){
    $query = DB::query("SELECT name FROM courses WHERE csid = '$selected_csid';");
    $result =  $query->execute();
    return $result[0]['name'];
  }

}


?>
