<?php

class ResumeDetails
{
    public $full_name;
    public $summary;
    public $email;
    public $phone;
    public $home;

    function education() {
      $array = array("St Therese School of Technology", "Tibagan High School", "Tibagan Elementary School");
      $count = count($array);

      for ($i=0; $i<$count; $i++) {
        echo "- ".$array[$i]."\n";
      }
    }

    function hard_skills() {
      $array = array("Drupal","WordPress", "HTML", "CSS", "PHP", "Javascript");
      $count = count($array);

      for ($i=0; $i<$count; $i++) {
        echo "- ".$array[$i]."\n";
      }
    }

    function soft_skills() {
      $array = array("Communication", "Collaboration", "Ability to Learn");
      $count = count($array);

      for ($i=0; $i<$count; $i++) {
        echo "- ".$array[$i]."\n";
      }
    }
}

$resume = new ResumeDetails();

$resume->full_name = "Ellen Grace Samson";
$resume->email = "ellengrace.samson@gmail.com";
$resume->phone = "(+63)945 227 1855";
$resume->home = "#14 Ipil-Ipil St Pinagsama Taguig City";

$resume->college = "Ellen Grace Samson";
$resume->course = "Information and Technology";
$resume->schoolyear = "2019 - 2022";

echo "\no========{[RESUME]}========o\n\n";
echo "Full Name: \t" . $resume->full_name . "\n";
echo "Email Address: \t" . $resume->email . "\n";
echo "Phone Number: \t" . $resume->phone . "\n";
echo "Home Address: \t" . $resume->home . "\n";

echo "\n*------->Education<-------*\n";
echo "College: \t" . $resume->college . "\n";
echo "Course: \t" . $resume->course . "\n";
echo "School Year: \t" . $resume->schoolyear . "\n";

echo "\n*------->Hard Skills<-------*\n";
echo $resume->hard_skills();

echo "\n*------->Soft Skills<-------*\n";
echo $resume->soft_skills();

echo "\n*------->Education:\n";
echo $resume->education();

?>