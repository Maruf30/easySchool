<?php 

function bangla($str){
      $en = array(1,2,3,4,5,6,7,8,9,0);
      $bn = array('১','২','৩','৪','৫','৬','৭','৮','৯','০');
      $str = str_replace($en, $bn, $str);
      $en = array( 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December' );
      $en_short = array( 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec' );
      $bn = array( 'জানুয়ারী', 'ফেব্রুয়ারী', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'অগাস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর' );
      $str = str_replace( $en, $bn, $str );
      $str = str_replace( $en_short, $bn, $str );
      $en = array('Saturday','Sunday','Monday','Tuesday','Wednesday','Thursday','Friday');
      $en_short = array('Sat','Sun','Mon','Tue','Wed','Thu','Fri');
      $bn_short = array('শনি', 'রবি','সোম','মঙ্গল','বুধ','বৃহঃ','শুক্র');
      $bn = array('শনিবার','রবিবার','সোমবার','মঙ্গলবার','বুধবার','বৃহস্পতিবার','শুক্রবার');
      $str = str_replace( $en, $bn, $str );
      $str = str_replace( $en_short, $bn_short, $str );
      $en = array( 'am', 'pm' );
      $bn = array( 'পূর্বাহ্ন', 'অপরাহ্ন' );
      $str = str_replace( $en, $bn, $str );
      return $str;
}

function bangla_class($str){
      $en = array(1,2,3,4,5,6,7,8,9,10);
      $bn = array('প্রথম','দ্বিতীয়','তৃতীয়','চতুর্থ','পঞ্চম','ষষ্ঠ','সপ্তম','অষ্টম','নবম','দশম');
      $str = str_replace($en, $bn, $str);
      if($str == 'প্রথম0') {
          return 'দশম';
      } else {
          return $str;
      }
      
}

function en_class($str){
      $en = array(1,2,3,4,5,6,7,8,9,10);
      $bn = array('One','Two','Three','Four','Five','Six','Seven','Eight','Nine','Ten');
      $str = str_replace($en, $bn, $str);
      if($str == 'One0') {
          return 'Ten';
      } else {
          return $str;
      }
      
}

function bangla_section($section_type, $class, $section){
      if($section_type == 1) {
            $en = array(0, 1, 2, 3, 4, 5);
            $bn = array('', 'ক','খ','গ', 'ঘ', 'ঙ');
            $section = str_replace($en, $bn, $section);
      } elseif ($section_type == 2) {
            $en = array(0, 1, 2, 3, 4, 5);
            if($class < 9) {
                  $bn = array('', 'ক','খ','গ', 'ঘ', 'ঙ');
            } else {
                  $bn = array('', 'বিজ্ঞান','মানবিক','বাণিজ্য', 'ভোকেশনাল', 'কারিগরি');
            }
            
            $section = str_replace($en, $bn, $section);
      } else {
            //
      }
      return $section;
}

function english_section($section_type, $class, $section){
      if($section_type == 1) {
            $en = array(0, 1, 2, 3, 4, 5);
            $bn = array('', 'A','B','C', 'D', 'E');
            $section = str_replace($en, $bn, $section);
      } elseif ($section_type == 2) {
            $en = array(0, 1, 2, 3, 4, 5);
            if($class < 9) {
                  $bn = array('', 'A','B','C', 'D', 'E');
            } else {
                  $bn = array('', 'SCIENCE','ARTS','COMMERCE', 'VOCATIONAL', 'TECHNICAL');
            }
            
            $section = str_replace($en, $bn, $section);
      } else {
            //
      }
      return $section;
}

function random_string($length){
      $pool = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';

      $random_string = substr(str_shuffle(str_repeat($pool, $length)), 0, $length);

      return $random_string;
}

function exam($exam_name){
      if($exam_name == 'first_term') {
            $exam = 'প্রথম সাময়িক';
      } elseif ($exam_name == 'second_term') {
            $exam = 'দ্বিতীয় সাময়িক';
      } elseif ($exam_name == 'halfyearly') {
            $exam = 'অর্ধবার্ষিক';
      } elseif ($exam_name == 'final') {
            $exam = 'বার্ষিক';
      } elseif ($exam_name == 'first_term_preparation') {
            $exam = 'প্রথম সাময়িক পূর্ব প্রস্তুতি';
      } elseif ($exam_name == 'second_term_preparation') {
            $exam = 'দ্বিতীয় সাময়িক পূর্ব প্রস্তুতি';
      }  elseif ($exam_name == 'final_preparation') {
            $exam = 'বার্ষিক পূর্ব প্রস্তুতি';
      } elseif ($exam_name == 'model_test') {
            $exam = 'মডেল টেস্ট';
      } elseif ($exam_name == 'pre_test') {
            $exam = 'প্রাক-নির্বাচনী';
      } elseif ($exam_name == 'test_exam') {
            $exam = 'নির্বাচনী';
      } 
      return $exam;
}

function exam_en($exam_name){
      if($exam_name == 'first_term') {
            $exam = 'First Term';
      } elseif ($exam_name == 'second_term') {
            $exam = 'Second Term';
      } elseif ($exam_name == 'halfyearly') {
            $exam = 'Half Yearly';
      } elseif ($exam_name == 'final') {
            $exam = 'Final';
      } elseif ($exam_name == 'first_term_preparation') {
            $exam = 'First Term Preparation';
      } elseif ($exam_name == 'second_term_preparation') {
            $exam = 'Second Term Preparation';
      }  elseif ($exam_name == 'final_preparation') {
            $exam = 'Final Preparation';
      } elseif ($exam_name == 'model_test') {
            $exam = 'Model Test';
      } elseif ($exam_name == 'pre_test') {
            $exam = 'Pre-Test';
      } elseif ($exam_name == 'test_exam') {
            $exam = 'Test';
      } 
      return $exam;
}

function grade_point($marks) {   
      if($marks >= 80 && $marks<=100){
            $gradepoint = '5.00'; 
       }else if($marks >= 70 && $marks<=80){
            $gradepoint = '4.00';  
       }else if($marks >= 60 && $marks<=70){
            $gradepoint = '3.50';  
       }else if($marks >= 50 && $marks<=60){
            $gradepoint = '3.00';  
       }else if($marks >= 40 && $marks<=50){
            $gradepoint = '2.00';  
       }else if($marks >= 33 && $marks<=40){
            $gradepoint = '1.00';  
       }else if($marks > 0 && $marks<33){
            $gradepoint = '0.00';  
       }else {
            $gradepoint = 'N/A';  
       }
      return $gradepoint;
}

function grade($marks) {  
       if($marks >= 80 && $marks<=100){
            $gradepointaverage = 'A+'; 
       }else if($marks >= 70 && $marks<80){
            $gradepointaverage = 'A';  
       }else if($marks >= 60 && $marks<70){
            $gradepointaverage = 'A-';  
       }else if($marks >= 50 && $marks<60){
            $gradepointaverage = 'B';  
       }else if($marks >= 40 && $marks<50){
            $gradepointaverage = 'C';  
       }else if($marks >= 33 && $marks<40){
            $gradepointaverage = 'D';  
       }else if($marks > 0 && $marks<33){
            $gradepointaverage = 'F';  
       }else {
            $gradepointaverage = 'N/A';  
       }
       return $gradepointaverage;
}

function avg_grade($gpa) {  
      if($gpa == 5){
      $avg_grade = 'A+'; 
      }else if($gpa >= 4 && $gpa < 5){
      $avg_grade = 'A';  
      }else if($gpa >= 3.5 && $gpa < 4){
      $avg_grade = 'A-';  
      }else if($gpa >= 3 && $gpa < 3.5){
      $avg_grade = 'B';  
      }else if($gpa >= 2 && $gpa < 3){
      $avg_grade = 'C';  
      }else if($gpa >= 1 && $gpa < 2){
      $avg_grade = 'D';  
      }else if($gpa >= 0 && $gpa < 1){
      $avg_grade = 'F';  
      }else {
       $avg_grade = 'N/A';  
      }
      return $avg_grade;
}