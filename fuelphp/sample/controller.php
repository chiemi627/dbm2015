<?php

class Controller_Enrollment extends Controller
{
	/**
	 * The basic welcome message
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
	   $data = array();
	   $data['courses'] = Model_Enrollment::getClasses();

	   $data['selected_csid'] = Input::post('course', null);
	   
	   if($data['selected_csid'] != null){
	     $data['course_name'] = Model_Enrollment::getCoursename($data['selected_csid']);
	     $data['students'] = Model_Enrollment::getStudents($data['selected_csid']);
           }

	   return Response::forge(View::forge('enrollment/index',$data));
	}
}

?>
