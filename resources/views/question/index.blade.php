<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="AuThemes Templates">
    <meta name="author" content="AuCreative">
    <meta name="keywords" content="AuThemes Templates">

    <link href="{{ asset('/passage_test/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet"
          media="all">
    <link href="{{ asset('/passage_test/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet"
          media="all">
    <!-- Font special for pages-->
    <link
        href="{{ asset('https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i') }}"
        rel="stylesheet">
    <link
        href="{{ asset('https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i') }}"
        rel="stylesheet">

    <link href="{{ asset('/passage_test/css/main.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('/passage_test/css/stylecheckbox.css') }}" rel="stylesheet" media="all">
    <link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <!-- Main Quill library -->
    <script src="//cdn.quilljs.com/1.3.6/quill.js"></script>
    <script
        src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous">
    </script>
    <script src="http://cdn.jsdelivr.net/g/filesaver.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <link href='https://fonts.googleapis.com/css?family=Droid+Sans:400,700|Droid+Serif' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/passage_test/css/lightgallery.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="/passage_test/css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="/passage_test/css/style.css"> <!-- Resource style -->
    <link rel="stylesheet" href="/passage_test/css/demo.css"> <!-- Demo style -->
    <style>
        .ql-editor p{
            background-color: white;
        }

    </style>
    <style>
        body {font-family: Arial, Helvetica, sans-serif;}

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            position: relative;
            background-color: #fefefe;
            margin: auto;
            padding: 0;
            border: 1px solid #888;
            width: 80%;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
            -webkit-animation-name: animatetop;
            -webkit-animation-duration: 0.4s;
            animation-name: animatetop;
            animation-duration: 0.4s
        }

        /* Add Animation */
        @-webkit-keyframes animatetop {
            from {top:-300px; opacity:0}
            to {top:0; opacity:1}
        }

        @keyframes animatetop {
            from {top:-300px; opacity:0}
            to {top:0; opacity:1}
        }

        /* The Close Button */
        .close {
            color: white;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        .modal-header {
            padding: 2px 16px;
            background-color: #5cb85c;
            color: white;
        }

        .modal-body {padding: 2px 16px;}

        .modal-footer {
            padding: 2px 16px;
            background-color: #5cb85c;
            color: white;
        }
    </style>
</head>

<body>

<?php
$test1 = $test->test_id;
$testObj = \App\Test::query()->find($test1)->first();
$dif1 = $testObj->d1;
$dif2 = $testObj->d2;
$dif3 = $testObj->d3;
$dif4 = $testObj->d4;
$dif5 = $testObj->d5;
$i = 0;
$j = 0;
$k = 0;
$c = 0;
$nbr = 0;
if ($dif1 < 3) {
    $qcms[$k] = App\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '1')->take($dif1)->get();
    $count = App\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '1')->take($dif1)->get()->count();
    $nbr = $nbr + $count;
    $id_qcm = [];
    $id_qcm1 = [];
    $id_binaire = [];
    $id_binaire1 = [];
    $id_text_libre = [];
    $id_text_libre1 = [];
    $k++;
    $c = 0;
    foreach ($qcms[$k - 1] as $qcm1) {
        $id_qcm[$c] = $qcm1->question_id;
        $c++;
    }
    if ($count != $dif1) {
        $c = 0;
        $difference = $dif1 - $count;
        $binaires[$i] = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '1')->take($difference)->get();
        $count = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '1')->take($difference)->get()->count();
        $nbr = $nbr + $count;
        $i++;
        foreach ($binaires[$i - 1] as $binaire) {
            $id_binaire[$c] = $binaire->binaire_id;
            $c++;
        }
        if ($count != $difference) {
            $difference1 = $difference - $count;
            $text_libre[$j] = DB::table('text_libre')->where('test_id', $test1)->where('difficulty', '1')->take($difference1)->get();
            $count = DB::table('text_libre')->where('test_id', $test1)->where('difficulty', '1')->take($difference1)->get()->count();
            $nbr = $nbr + $count;
            $j++;
            $c = 0;
            foreach ($text_libre[$j - 1] as $text) {
                $id_text_libre[$c] = $text->question_id;
                $c++;
            }
        }
    }
} else {
    $take = intval($dif1 / 3);
    $qcms[$k] = App\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '1')->take($take)->get();
    $count = App\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '1')->take($take)->get()->count();
    $nbr = $nbr + $count;
    $id_qcm = [];
    $id_qcm1 = [];
    $id_binaire = [];
    $id_binaire1 = [];
    $id_text_libre = [];
    $id_text_libre1 = [];
    $k++;
    $c = 0;
    foreach ($qcms[$k - 1] as $qcm1) {
        $id_qcm[$c] = $qcm1->question_id;
        $c++;
    }
    if ($count != $take) {
        $c = 0;
        $difference = $take - $count;
        $binaires[$i] = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '1')->take($difference)->get();
        $count = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '1')->take($difference)->get()->count();
        $nbr = $nbr + $count;
        $i++;
        foreach ($binaires[$i - 1] as $binaire) {
            $id_binaire[$c] = $binaire->binaire_id;
            $c++;
        }
        if ($count != $difference) {
            $difference1 = $difference - $count;
            $text_libre[$j] = DB::table('text_libre')->where('test_id', $test1)->where('difficulty', '1')->take($difference1)->get();
            $count = DB::table('text_libre')->where('test_id', $test1)->where('difficulty', '1')->take($difference1)->get()->count();
            $nbr = $nbr + $count;
            $j++;
            $c = 0;
            foreach ($text_libre[$j - 1] as $text) {
                $id_text_libre[$c] = $text->question_id;
                $c++;
            }
        }
    }
    $binaires[$i] = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '1')->whereNotIn('binaire_id', $id_binaire)->take($take)->get();
    $count = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '1')->whereNotIn('binaire_id', $id_binaire)->take($take)->get()->count();
    $nbr = $nbr + $count;
    $i++;
    $c = 0;
    foreach ($binaires[$i - 1] as $binaire) {
        $id_binaire1[$c] = $binaire->binaire_id;
        $c++;
    }
    if ($count != $take) {
        $difference = $take - $count;
        $qcms[$k] = app\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '1')->whereNotIn('question_id', $id_qcm)->take($difference)->get();
        $count = app\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '1')->whereNotIn('question_id', $id_qcm)->take($difference)->get()->count();
        $nbr = $nbr + $count;
        $k++;
        $c = 0;
        foreach ($qcms[$k - 1] as $qcm1) {
            $id_qcm1[$c] = $qcm1->question_id;
            $c++;
        }
        if ($count != $difference) {
            $difference1 = $difference - $count;
            $text_libre[$j] = DB::table('text_libre')->where('test_id', $test1)->whereNotIn('question_id', $id_text_libre)->where('difficulty', '1')->take($difference1)->get();
            $count = DB::table('text_libre')->where('test_id', $test1)->whereNotIn('question_id', $id_text_libre)->where('difficulty', '1')->take($difference1)->get()->count();
            $nbr = $nbr + $count;
            $j++;
            $c = 0;
            foreach ($text_libre[$j - 1] as $text) {
                $id_text_libre1[$c] = $text->question_id;
                $c++;
            }
        }
    }
    $take = $dif1 - $nbr;
    $text_libre[$j] = App\text_libre::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '1')->whereNotIn('question_id', $id_text_libre)->whereNotIn('question_id', $id_text_libre1)->take($take)->get();
    $count = App\text_libre::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '1')->whereNotIn('question_id', $id_text_libre)->whereNotIn('question_id', $id_text_libre1)->take($take)->get()->count();
    $j++;
    if ($count != $take) {
        $difference = $take - $count;
        $qcms[$k] = app\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '1')->whereNotIn('question_id', $id_qcm)->whereNotIn('question_id', $id_qcm1)->take($difference)->get();
        $count = app\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '1')->whereNotIn('question_id', $id_qcm)->whereNotIn('question_id', $id_qcm1)->take($difference)->get()->count();
        $k++;
        if ($count != $difference) {
            $difference1 = $difference - $count;
            $binaires[$i] = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '1')->whereNotIn('binaire_id', $id_binaire)->whereNotIn('binaire_id', $id_binaire1)->take($difference1)->get();
            $i++;
        }
    }
}
$nbr = 0;
if ($dif2 < 3) {
    $qcms[$k] = App\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '2')->take($dif2)->get();
    $count = App\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '2')->take($dif2)->get()->count();
    $nbr = $nbr + $count;
    $id_qcm = [];
    $id_qcm1 = [];
    $id_binaire = [];
    $id_binaire1 = [];
    $id_text_libre = [];
    $id_text_libre1 = [];
    $k++;
    $c = 0;
    foreach ($qcms[$k - 1] as $qcm1) {
        $id_qcm[$c] = $qcm1->question_id;
        $c++;
    }
    if ($count != $dif2) {
        $c = 0;
        $difference = $dif2 - $count;
        $binaires[$i] = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '2')->take($difference)->get();
        $count = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '2')->take($difference)->get()->count();
        $nbr = $nbr + $count;
        $i++;
        foreach ($binaires[$i - 1] as $binaire) {
            $id_binaire[$c] = $binaire->binaire_id;
            $c++;
        }
        if ($count != $difference) {
            $difference1 = $difference - $count;
            $text_libre[$j] = DB::table('text_libre')->where('test_id', $test1)->where('difficulty', '2')->take($difference1)->get();
            $count = DB::table('text_libre')->where('test_id', $test1)->where('difficulty', '2')->take($difference1)->get()->count();
            $nbr = $nbr + $count;
            $j++;
            $c = 0;
            foreach ($text_libre[$j - 1] as $text) {
                $id_text_libre[$c] = $text->question_id;
                $c++;
            }
        }
    }
} else {
    $take = intval($dif2 / 3);
    $qcms[$k] = App\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '2')->take($take)->get();
    $count = App\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '2')->take($take)->get()->count();
    $nbr = $nbr + $count;
    $id_qcm = [];
    $id_qcm1 = [];
    $id_binaire = [];
    $id_binaire1 = [];
    $id_text_libre = [];
    $id_text_libre1 = [];
    $k++;
    $c = 0;
    foreach ($qcms[$k - 1] as $qcm1) {
        $id_qcm[$c] = $qcm1->question_id;
        $c++;
    }
    if ($count != $take) {
        $c = 0;
        $difference = $take - $count;
        $binaires[$i] = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '2')->take($difference)->get();
        $count = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '2')->take($difference)->get()->count();
        $nbr = $nbr + $count;
        $i++;
        foreach ($binaires[$i - 1] as $binaire) {
            $id_binaire[$c] = $binaire->binaire_id;
            $c++;
        }
        if ($count != $difference) {
            $difference1 = $difference - $count;
            $text_libre[$j] = DB::table('text_libre')->where('test_id', $test1)->where('difficulty', '2')->take($difference1)->get();
            $count = DB::table('text_libre')->where('test_id', $test1)->where('difficulty', '2')->take($difference1)->get()->count();
            $nbr = $nbr + $count;
            $j++;
            $c = 0;
            foreach ($text_libre[$j - 1] as $text) {
                $id_text_libre[$c] = $text->question_id;
                $c++;
            }
        }
    }
    $binaires[$i] = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '2')->whereNotIn('binaire_id', $id_binaire)->take($take)->get();
    $count = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '2')->whereNotIn('binaire_id', $id_binaire)->take($take)->get()->count();
    $nbr = $nbr + $count;
    $i++;
    $c = 0;
    foreach ($binaires[$i - 1] as $binaire) {
        $id_binaire1[$c] = $binaire->binaire_id;
        $c++;
    }
    if ($count != $take) {
        $difference = $take - $count;
        $qcms[$k] = app\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '2')->whereNotIn('question_id', $id_qcm)->take($difference)->get();
        $count = app\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '2')->whereNotIn('question_id', $id_qcm)->take($difference)->get()->count();
        $nbr = $nbr + $count;
        $k++;
        $c = 0;
        foreach ($qcms[$k - 1] as $qcm1) {
            $id_qcm1[$c] = $qcm1->question_id;
            $c++;
        }
        if ($count != $difference) {
            $difference1 = $difference - $count;
            $text_libre[$j] = DB::table('text_libre')->where('test_id', $test1)->whereNotIn('question_id', $id_text_libre)->where('difficulty', '2')->take($difference1)->get();
            $count = DB::table('text_libre')->where('test_id', $test1)->whereNotIn('question_id', $id_text_libre)->where('difficulty', '2')->take($difference1)->get()->count();
            $nbr = $nbr + $count;
            $j++;
            $c = 0;
            foreach ($text_libre[$j - 1] as $text) {
                $id_text_libre1[$c] = $text->question_id;
                $c++;
            }
        }
    }
    $take = $dif2 - $nbr;
    $text_libre[$j] = App\text_libre::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '2')->whereNotIn('question_id', $id_text_libre)->whereNotIn('question_id', $id_text_libre1)->take($take)->get();
    $count = App\text_libre::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '2')->whereNotIn('question_id', $id_text_libre)->whereNotIn('question_id', $id_text_libre1)->take($take)->get()->count();
    $j++;
    if ($count != $take) {
        $difference = $take - $count;
        $qcms[$k] = app\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '2')->whereNotIn('question_id', $id_qcm)->whereNotIn('question_id', $id_qcm1)->take($difference)->get();
        $count = app\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '2')->whereNotIn('question_id', $id_qcm)->whereNotIn('question_id', $id_qcm1)->take($difference)->get()->count();
        $k++;
        if ($count != $difference) {
            $difference1 = $difference - $count;
            $binaires[$i] = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '2')->whereNotIn('binaire_id', $id_binaire)->whereNotIn('binaire_id', $id_binaire1)->take($difference1)->get();
            $i++;
        }
    }
}
$nbr = 0;
if ($dif3 < 3) {
    $qcms[$k] = App\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '3')->take($dif3)->get();
    $count = App\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '3')->take($dif3)->get()->count();
    $nbr = $nbr + $count;
    $id_qcm = [];
    $id_qcm1 = [];
    $id_binaire = [];
    $id_binaire1 = [];
    $id_text_libre = [];
    $id_text_libre1 = [];
    $k++;
    $c = 0;
    foreach ($qcms[$k - 1] as $qcm1) {
        $id_qcm[$c] = $qcm1->question_id;
        $c++;
    }
    if ($count != $dif3) {
        $c = 0;
        $difference = $dif3 - $count;
        $binaires[$i] = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '3')->take($difference)->get();
        $count = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '3')->take($difference)->get()->count();
        $nbr = $nbr + $count;
        $i++;
        foreach ($binaires[$i - 1] as $binaire) {
            $id_binaire[$c] = $binaire->binaire_id;
            $c++;
        }
        if ($count != $difference) {
            $difference1 = $difference - $count;
            $text_libre[$j] = DB::table('text_libre')->where('test_id', $test1)->where('difficulty', '3')->take($difference1)->get();
            $count = DB::table('text_libre')->where('test_id', $test1)->where('difficulty', '3')->take($difference1)->get()->count();
            $nbr = $nbr + $count;
            $j++;
            $c = 0;
            foreach ($text_libre[$j - 1] as $text) {
                $id_text_libre[$c] = $text->question_id;
                $c++;
            }
        }
    }
} else {
    $take = intval($dif3 / 3);
    $qcms[$k] = App\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '3')->take($take)->get();
    $count = App\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '3')->take($take)->get()->count();
    $nbr = $nbr + $count;
    $id_qcm = [];
    $id_qcm1 = [];
    $id_binaire = [];
    $id_binaire1 = [];
    $id_text_libre = [];
    $id_text_libre1 = [];
    $k++;
    $c = 0;
    foreach ($qcms[$k - 1] as $qcm1) {
        $id_qcm[$c] = $qcm1->question_id;
        $c++;
    }
    if ($count != $take) {
        $c = 0;
        $difference = $take - $count;
        $binaires[$i] = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '3')->take($difference)->get();
        $count = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '3')->take($difference)->get()->count();
        $nbr = $nbr + $count;
        $i++;
        foreach ($binaires[$i - 1] as $binaire) {
            $id_binaire[$c] = $binaire->binaire_id;
            $c++;
        }
        if ($count != $difference) {
            $difference1 = $difference - $count;
            $text_libre[$j] = DB::table('text_libre')->where('test_id', $test1)->where('difficulty', '3')->take($difference1)->get();
            $count = DB::table('text_libre')->where('test_id', $test1)->where('difficulty', '3')->take($difference1)->get()->count();
            $nbr = $nbr + $count;
            $j++;
            $c = 0;
            foreach ($text_libre[$j - 1] as $text) {
                $id_text_libre[$c] = $text->question_id;
                $c++;
            }
        }
    }
    $binaires[$i] = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '3')->whereNotIn('binaire_id', $id_binaire)->take($take)->get();
    $count = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '3')->whereNotIn('binaire_id', $id_binaire)->take($take)->get()->count();
    $nbr = $nbr + $count;
    $i++;
    $c = 0;
    foreach ($binaires[$i - 1] as $binaire) {
        $id_binaire1[$c] = $binaire->binaire_id;
        $c++;
    }
    if ($count != $take) {
        $difference = $take - $count;
        $qcms[$k] = app\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '3')->whereNotIn('question_id', $id_qcm)->take($difference)->get();
        $count = app\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '3')->whereNotIn('question_id', $id_qcm)->take($difference)->get()->count();
        $nbr = $nbr + $count;
        $k++;
        $c = 0;
        foreach ($qcms[$k - 1] as $qcm1) {
            $id_qcm1[$c] = $qcm1->question_id;
            $c++;
        }
        if ($count != $difference) {
            $difference1 = $difference - $count;
            $text_libre[$j] = DB::table('text_libre')->where('test_id', $test1)->whereNotIn('question_id', $id_text_libre)->where('difficulty', '3')->take($difference1)->get();
            $count = DB::table('text_libre')->where('test_id', $test1)->whereNotIn('question_id', $id_text_libre)->where('difficulty', '3')->take($difference1)->get()->count();
            $nbr = $nbr + $count;
            $j++;
            $c = 0;
            foreach ($text_libre[$j - 1] as $text) {
                $id_text_libre1[$c] = $text->question_id;
                $c++;
            }
        }
    }
    $take = $dif3 - $nbr;
    $text_libre[$j] = App\text_libre::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '3')->whereNotIn('question_id', $id_text_libre)->whereNotIn('question_id', $id_text_libre1)->take($take)->get();
    $count = App\text_libre::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '3')->whereNotIn('question_id', $id_text_libre)->whereNotIn('question_id', $id_text_libre1)->take($take)->get()->count();
    $j++;
    if ($count != $take) {
        $difference = $take - $count;
        $qcms[$k] = app\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '3')->whereNotIn('question_id', $id_qcm)->whereNotIn('question_id', $id_qcm1)->take($difference)->get();
        $count = app\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '3')->whereNotIn('question_id', $id_qcm)->whereNotIn('question_id', $id_qcm1)->take($difference)->get()->count();
        $k++;
        if ($count != $difference) {
            $difference1 = $difference - $count;
            $binaires[$i] = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '3')->whereNotIn('binaire_id', $id_binaire)->whereNotIn('binaire_id', $id_binaire1)->take($difference1)->get();
            $i++;
        }
    }
}
$nbr = 0;
if ($dif4 < 3) {
    $qcms[$k] = App\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '4')->take($dif4)->get();
    $count = App\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '4')->take($dif4)->get()->count();
    $nbr = $nbr + $count;
    $id_qcm = [];
    $id_qcm1 = [];
    $id_binaire = [];
    $id_binaire1 = [];
    $id_text_libre = [];
    $id_text_libre1 = [];
    $k++;
    $c = 0;
    foreach ($qcms[$k - 1] as $qcm1) {
        $id_qcm[$c] = $qcm1->question_id;
        $c++;
    }
    if ($count != $dif4) {
        $c = 0;
        $difference = $dif4 - $count;
        $binaires[$i] = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '4')->take($difference)->get();
        $count = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '4')->take($difference)->get()->count();
        $nbr = $nbr + $count;
        $i++;
        foreach ($binaires[$i - 1] as $binaire) {
            $id_binaire[$c] = $binaire->binaire_id;
            $c++;
        }
        if ($count != $difference) {
            $difference1 = $difference - $count;
            $text_libre[$j] = DB::table('text_libre')->where('test_id', $test1)->where('difficulty', '4')->take($difference1)->get();
            $count = DB::table('text_libre')->where('test_id', $test1)->where('difficulty', '4')->take($difference1)->get()->count();
            $nbr = $nbr + $count;
            $j++;
            $c = 0;
            foreach ($text_libre[$j - 1] as $text) {
                $id_text_libre[$c] = $text->question_id;
                $c++;
            }
        }
    }
} else {
    $take = intval($dif4 / 3);
    $qcms[$k] = App\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '4')->take($take)->get();
    $count = App\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '4')->take($take)->get()->count();
    $nbr = $nbr + $count;
    $id_qcm = [];
    $id_qcm1 = [];
    $id_binaire = [];
    $id_binaire1 = [];
    $id_text_libre = [];
    $id_text_libre1 = [];
    $k++;
    $c = 0;
    foreach ($qcms[$k - 1] as $qcm1) {
        $id_qcm[$c] = $qcm1->question_id;
        $c++;
    }
    if ($count != $take) {
        $c = 0;
        $difference = $take - $count;
        $binaires[$i] = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '4')->take($difference)->get();
        $count = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '4')->take($difference)->get()->count();
        $nbr = $nbr + $count;
        $i++;
        foreach ($binaires[$i - 1] as $binaire) {
            $id_binaire[$c] = $binaire->binaire_id;
            $c++;
        }
        if ($count != $difference) {
            $difference1 = $difference - $count;
            $text_libre[$j] = DB::table('text_libre')->where('test_id', $test1)->where('difficulty', '4')->take($difference1)->get();
            $count = DB::table('text_libre')->where('test_id', $test1)->where('difficulty', '4')->take($difference1)->get()->count();
            $nbr = $nbr + $count;
            $j++;
            $c = 0;
            foreach ($text_libre[$j - 1] as $text) {
                $id_text_libre[$c] = $text->question_id;
                $c++;
            }
        }
    }
    $binaires[$i] = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '4')->whereNotIn('binaire_id', $id_binaire)->take($take)->get();
    $count = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '4')->whereNotIn('binaire_id', $id_binaire)->take($take)->get()->count();
    $nbr = $nbr + $count;
    $i++;
    $c = 0;
    foreach ($binaires[$i - 1] as $binaire) {
        $id_binaire1[$c] = $binaire->binaire_id;
        $c++;
    }
    if ($count != $take) {
        $difference = $take - $count;
        $qcms[$k] = app\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '4')->whereNotIn('question_id', $id_qcm)->take($difference)->get();
        $count = app\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '4')->whereNotIn('question_id', $id_qcm)->take($difference)->get()->count();
        $nbr = $nbr + $count;
        $k++;
        $c = 0;
        foreach ($qcms[$k - 1] as $qcm1) {
            $id_qcm1[$c] = $qcm1->question_id;
            $c++;
        }
        if ($count != $difference) {
            $difference1 = $difference - $count;
            $text_libre[$j] = DB::table('text_libre')->where('test_id', $test1)->whereNotIn('question_id', $id_text_libre)->where('difficulty', '4')->take($difference1)->get();
            $count = DB::table('text_libre')->where('test_id', $test1)->whereNotIn('question_id', $id_text_libre)->where('difficulty', '4')->take($difference1)->get()->count();
            $nbr = $nbr + $count;
            $j++;
            $c = 0;
            foreach ($text_libre[$j - 1] as $text) {
                $id_text_libre1[$c] = $text->question_id;
                $c++;
            }
        }
    }
    $take = $dif4 - $nbr;
    $text_libre[$j] = App\text_libre::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '4')->whereNotIn('question_id', $id_text_libre)->whereNotIn('question_id', $id_text_libre1)->take($take)->get();
    $count = App\text_libre::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '4')->whereNotIn('question_id', $id_text_libre)->whereNotIn('question_id', $id_text_libre1)->take($take)->get()->count();
    $j++;
    if ($count != $take) {
        $difference = $take - $count;
        $qcms[$k] = app\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '4')->whereNotIn('question_id', $id_qcm)->whereNotIn('question_id', $id_qcm1)->take($difference)->get();
        $count = app\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '4')->whereNotIn('question_id', $id_qcm)->whereNotIn('question_id', $id_qcm1)->take($difference)->get()->count();
        $k++;
        if ($count != $difference) {
            $difference1 = $difference - $count;
            $binaires[$i] = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '4')->whereNotIn('binaire_id', $id_binaire)->whereNotIn('binaire_id', $id_binaire1)->take($difference1)->get();
            $i++;
        }
    }
}
$nbr = 0;
if ($dif5 < 3) {
    $qcms[$k] = App\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '5')->take($dif5)->get();
    $count = App\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '5')->take($dif5)->get()->count();
    $nbr = $nbr + $count;
    $id_qcm = [];
    $id_qcm1 = [];
    $id_binaire = [];
    $id_binaire1 = [];
    $id_text_libre = [];
    $id_text_libre1 = [];
    $k++;
    $c = 0;
    foreach ($qcms[$k - 1] as $qcm1) {
        $id_qcm[$c] = $qcm1->question_id;
        $c++;
    }
    if ($count != $dif5) {
        $c = 0;
        $difference = $dif5 - $count;
        $binaires[$i] = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '5')->take($difference)->get();
        $count = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '5')->take($difference)->get()->count();
        $nbr = $nbr + $count;
        $i++;
        foreach ($binaires[$i - 1] as $binaire) {
            $id_binaire[$c] = $binaire->binaire_id;
            $c++;
        }
        if ($count != $difference) {
            $difference1 = $difference - $count;
            $text_libre[$j] = DB::table('text_libre')->where('test_id', $test1)->where('difficulty', '5')->take($difference1)->get();
            $count = DB::table('text_libre')->where('test_id', $test1)->where('difficulty', '5')->take($difference1)->get()->count();
            $nbr = $nbr + $count;
            $j++;
            $c = 0;
            foreach ($text_libre[$j - 1] as $text) {
                $id_text_libre[$c] = $text->question_id;
                $c++;
            }
        }
    }
} else {
    $take = intval($dif5 / 3);
    $qcms[$k] = App\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '5')->take($take)->get();
    $count = App\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '5')->take($take)->get()->count();
    $nbr = $nbr + $count;
    $id_qcm = [];
    $id_qcm1 = [];
    $id_binaire = [];
    $id_binaire1 = [];
    $id_text_libre = [];
    $id_text_libre1 = [];
    $k++;
    $c = 0;
    foreach ($qcms[$k - 1] as $qcm1) {
        $id_qcm[$c] = $qcm1->question_id;
        $c++;
    }
    if ($count != $take) {
        $c = 0;
        $difference = $take - $count;
        $binaires[$i] = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '5')->take($difference)->get();
        $count = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '5')->take($difference)->get()->count();
        $nbr = $nbr + $count;
        $i++;
        foreach ($binaires[$i - 1] as $binaire) {
            $id_binaire[$c] = $binaire->binaire_id;
            $c++;
        }
        if ($count != $difference) {
            $difference1 = $difference - $count;
            $text_libre[$j] = DB::table('text_libre')->where('test_id', $test1)->where('difficulty', '5')->take($difference1)->get();
            $count = DB::table('text_libre')->where('test_id', $test1)->where('difficulty', '5')->take($difference1)->get()->count();
            $nbr = $nbr + $count;
            $j++;
            $c = 0;
            foreach ($text_libre[$j - 1] as $text) {
                $id_text_libre[$c] = $text->question_id;
                $c++;
            }
        }
    }
    $binaires[$i] = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '5')->whereNotIn('binaire_id', $id_binaire)->take($take)->get();
    $count = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '5')->whereNotIn('binaire_id', $id_binaire)->take($take)->get()->count();
    $nbr = $nbr + $count;
    $i++;
    $c = 0;
    foreach ($binaires[$i - 1] as $binaire) {
        $id_binaire1[$c] = $binaire->binaire_id;
        $c++;
    }
    if ($count != $take) {
        $difference = $take - $count;
        $qcms[$k] = app\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '5')->whereNotIn('question_id', $id_qcm)->take($difference)->get();
        $count = app\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '5')->whereNotIn('question_id', $id_qcm)->take($difference)->get()->count();
        $nbr = $nbr + $count;
        $k++;
        $c = 0;
        foreach ($qcms[$k - 1] as $qcm1) {
            $id_qcm1[$c] = $qcm1->question_id;
            $c++;
        }
        if ($count != $difference) {
            $difference1 = $difference - $count;
            $text_libre[$j] = DB::table('text_libre')->where('test_id', $test1)->whereNotIn('question_id', $id_text_libre)->where('difficulty', '5')->take($difference1)->get();
            $count = DB::table('text_libre')->where('test_id', $test1)->whereNotIn('question_id', $id_text_libre)->where('difficulty', '5')->take($difference1)->get()->count();
            $nbr = $nbr + $count;
            $j++;
            $c = 0;
            foreach ($text_libre[$j - 1] as $text) {
                $id_text_libre1[$c] = $text->question_id;
                $c++;
            }
        }
    }
    $take = $dif5 - $nbr;
    $text_libre[$j] = App\text_libre::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '5')->whereNotIn('question_id', $id_text_libre)->whereNotIn('question_id', $id_text_libre1)->take($take)->get();
    $count = App\text_libre::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '5')->whereNotIn('question_id', $id_text_libre)->whereNotIn('question_id', $id_text_libre1)->take($take)->get()->count();
    $j++;
    if ($count != $take) {
        $difference = $take - $count;
        $qcms[$k] = app\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '5')->whereNotIn('question_id', $id_qcm)->whereNotIn('question_id', $id_qcm1)->take($difference)->get();
        $count = app\qcm::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '5')->whereNotIn('question_id', $id_qcm)->whereNotIn('question_id', $id_qcm1)->take($difference)->get()->count();
        $k++;
        if ($count != $difference) {
            $difference1 = $difference - $count;
            $binaires[$i] = App\binaire::orderByRaw("RAND()")->where('test_id', $test1)->where('difficulty', '5')->whereNotIn('binaire_id', $id_binaire)->whereNotIn('binaire_id', $id_binaire1)->take($difference1)->get();
            $i++;
        }
    }
}
$nombre = 0;
for ($n = 0; $n < $k; $n++) {
    foreach ($qcms[$n] as $qcm) {
        $nombre++;
    }
}
for ($m = 0; $m < $i; $m++) {
    foreach ($binaires[$m] as $binaire) {
        $nombre++;
    }
}
for ($b = 0; $b < $j; $b++) {
    foreach ($text_libre[$b] as $text) {
        $nombre++;
    }
}
?>
<header class="cd-main-header">
    <?php $nomtest = $test->nom ?>
    <a class="cd-logo"><label class="labelogo">{{$nomtest}} </label></a>
    <?php $dure = $test->duree ?>
    <?php $hour = intval($dure / 60); ?>
    <?php $minut = $dure % 60; ?>

    <ul class="countdown cd-header-buttons" style="  background: #ffffff;">

        <li>
            <span id="hour" class="hours">0{{$hour}}</span>
            <p class="hours_ref">hours</p>
        </li>
        <li>
            <span id="min" class="minutes">0{{$minut}}</span>
            <p class="minutes_ref">minutes</p>
        </li>
        <li>
            <span id="sec" class="seconds last">00</span>
            <p class="seconds_ref">seconds</p>
        </li>
    </ul>
</header>

<main class="cd-main-content">
    <a href="#0" class="cd-btn js-cd-panel-trigger" data-panel="main">Accéder aux autres questions</a>
    <!-- your content here -->
</main>

<div class="cd-panel cd-panel--from-right js-cd-panel-main " style="z-index: 2000;">
    <header class="cd-panel__header ">
        <h1>Les questions</h1>
        <a href="#0" class="cd-panel__close js-cd-close">Close</a>
    </header>

    <div class="cd-panel__container">
        <div class="cd-panel__content">
            @php $compteur=1; @endphp

            <div id="ziad">
                @for($b=0;$b<$k;$b++)
                    @foreach($qcms[$b] as $item)
                        <button type="button" class="btn btn-link butttext pagenum"  value="{{$compteur}}">
                            <label  class="labelnum">{{$compteur}})</label>
                            {{$item->question_text}}</button>
                        <input type="hidden" name="hiddennum" value="{{$compteur}}">
                        @php $compteur++; @endphp
                        <br>
                    @endforeach
                @endfor
                @for($b=0;$b<$i;$b++)
                    @foreach($binaires[$b] as $item)

                            <button type="button" class="btn btn-link butttext pagenum"  value="{{$compteur}}">
                                <label class="labelnum">{{$compteur}})</label>
                                {{$item->question_text}}</button>
                        <input type="hidden" name="hiddennum" value="{{$compteur}}">
                        @php $compteur++; @endphp
                        <br>
                    @endforeach
                @endfor
                @for($b=0;$b<$j;$b++)
                    @foreach($text_libre[$b] as $item)
                            <button type="button" class="btn btn-link butttext pagenum"  value="{{$compteur}}">
                                <label class="labelnum">{{$compteur}})</label>
                                {{$item->question_text}}</button>
                        <input type="hidden" name="hiddennum" value="{{$compteur}}">
                        @php $compteur++; @endphp
                        <br>

                    @endforeach
                @endfor
                <br>


            </div>
        </div> <!-- cd-panel__content -->
    </div> <!-- cd-panel__container -->
</div> <!-- cd-panel -->


    <div class=" p-t-150 p-b-80">
    <div class="wrapper wrapper--w1070">
        <div class="card card-1">
            <div class="card-heading">
                <h2 class="title"></h2>
            </div>


            <div class="card-body">

            <?php $test1 = $test->test_id;
                $rqs = request()->segment(count(request()->segments()));
                ?>
                <form class="wizard-container" method="POST" action="{{ route('Resultat.store')}}" id="js-wizard-form">
                    @csrf
                    <input type="hidden" name="session_id" value="{{$rqs}}">
                    <input type="hidden" name="etudiant_id" value="{{$rqs}}">
                    @csrf
                    <?php  $cou = $nombre;?>
                    <?php  $nv = intval(100 / $cou) ?>
                    <?php $vaj = 100 - ($cou * $nv) ?>
                    <?php $final = $vaj + $nv ?>

                    @for($y=0;$y<$k;$y++)
                    @foreach($qcms[$y] as $qcm)
                       <input type="hidden" value="{{$qcm->question_id}}" name="question_qcm[]" >
                    @endforeach
                    @endfor
                       <input type="hidden" value="{{$k}}"  name="indice_qcm">
                   @for($x=0;$x<$i;$x++)
                       @foreach($binaires[$x] as $item)
                         <input type="hidden" value="{{$item->binaire_id}}" name="question_binaire[]" >
                       @endforeach
                    @endfor
                    <input type="hidden" value="{{$i}}"  name="indice_binaire">
                    @for($w=0;$w<$j;$w++)
                        @foreach($text_libre[$w] as $item)
                           <input type="hidden" value="{{$item->question_id}}" name="question_text_libre[]" >
                        @endforeach
                    @endfor
                    <input type="hidden" value="{{$j}}"  name="indice_text_libre">


                    <div class="progress" id="js-progress">
                        <div class="numb" role="numb">
                            <span class="numbe" style="display:none">{{$cou}}</span>
                        </div>
                        <div class="shi" role="shi">
                            <span class="shii" style="display:none">{{$nv}}</span>
                        </div>
                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                             aria-valuemax="100" style="width:{{$final}}%;">
                            <span class="progress-val">{{$final}}%</span>

                        </div>
                    </div>


                    <ul class="nav nav-tab">
                        @for ($somme=0;$somme<(DB::table('qcm')->where('test_id',$test1)->count()+DB::table('binaire')->where('test_id',$test1)->count()+DB::table('text_libre')->where('test_id',$test1)->count());$somme++)
                            <li>
                                <a href="#tab{{$somme+1}}" data-toggle="tab">1</a>

                            </li>

                        @endfor

                    </ul>

                    <div class="tab-content">
                        <div class="tab-content">

                        <?php $page = 0 ?>
                        @for($n=0;$n<$k ; $n++)
                            @foreach ($qcms[$n]  as $qcm)
                                <div class="tab-pane "  id="tab{{$page+1}}" >
                                    <input type="hidden" id="currentt" value="{{$page}}">
                                    <div class="numquestion">question {{$page+1}} sur {{$cou}}</div>
                                    <div class="input-group">
                                        <input type="hidden" name="qcms[{{ $qcm->question_id }}]"
                                               value="{{$qcm->question_id}}">
                                        <div class="answ">Question :</div>
                                        <label class="label ques"> {{ $qcm->question_text }}</label>
                                        <div class="answ">Reponse :</div>
                                        <?php $opt = DB::table('option')->where('question_id', $qcm->question_id)->get() ?>
                                        @foreach ($opt  as $option)
                                            <label>
                                                @if ($option->type=='text')

                                                <input type="checkbox" class="option-input checkbox"
                                                       name="options[{{ $option->option_id }}]"
                                                       id="option-{{$option->option_id}}"
                                                       value="{{$option->option_id}}">
                                                <label class="opti ques">{{$option->option_text}}</label>

                                                <br>
                                                @elseif($option->type=='image')
                                                    <input  type="checkbox" class="option-input checkbox checkboximg"
                                                            name="options[{{ $option->option_id }}]"
                                                            id="option-{{$option->option_id}}"
                                                            value="{{$option->option_id}}">
                                                    <ul style="display: inline!important;" class="list-unstyled row lightgallery">
                                                        <li data-src="/storage/public/option_image/{{$option->option_image}}">
                                                            <a style="display: inline!important;" href="">

                                                            <img class="qcmimg" src="/storage/public/option_image/{{$option->option_image}}" >
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <br>
                                                @endif

                                            </label>

                                        @endforeach
                                    </div>

                                    <div class="btn-next-con">
                                        @if($cou === 1)
                                            <input type="hidden" name="test_id" value="{{$test1}}">
                                            <button class="btn-last" type="button" onclick="getHTML();">Valider</button>
                                        @elseif ($page === 0)<a  class="btn-next">Suivant</a>
                                        @elseif($page === ($cou-1))
                                            <a class="btn-back">Retour</a>
                                            <input type="hidden" name="test_id" value="{{$test1}}">
                                            <button class="btn-last" type="button" onclick="getHTML();">Valider</button>

                                        @else
                                            <a class="btn-back">Retour</a>
                                            <a  class="btn-next">Suivant</a>

                                        @endif
                                    </div>

                                </div>
                                <?php $page++ ?>


                            @endforeach
                        @endfor
                        @for($m=0;$m<$i;$m++)
                            @foreach ($binaires[$m]  as $binaire)
                                <div class="tab-pane " id="tab{{$page+1}}">
                                    <div class="numquestion">question {{$page+1}} sur {{$cou}}</div>
                                    <div class="input-group">
                                        <div class="answ">Question :</div>
                                        <label class="label ques">{{ $binaire->question_text }}</label>
                                        <div class="answ">Reponse :</div>
                                        <?php $opt1 = DB::table('option')->where('binaire_id', $binaire->binaire_id)->get()?>
                                        @foreach ($opt1  as $option)
                                            <label>
                                                <input type="radio" class="option-input radio"
                                                       name="questions[{{ $binaire->binaire_id}}]"
                                                       id="option-{{$option->option_id}}"
                                                       value="{{$option->option_id}}">
                                                <label class="opti ques">{{$option->option_text}}</label>
                                                <br>
                                            </label>
                                        @endforeach
                                    </div>

                                    <div class="btn-next-con">
                                        @if($cou === 1)
                                            <input type="hidden" name="test_id" value="{{$test1}}">
                                            <button class="btn-last" type="button" onclick="getHTML();">Valider</button>
                                        @elseif ($page === 0)<a class="btn-next">Suivant</a>
                                        @elseif($page === ($cou-1))
                                            <a class="btn-back">Retour</a>
                                            <input type="hidden" name="test_id" value="{{$test1}}">
                                            <button class="btn-last" type="button" onclick="getHTML();">Valider</button>
                                        @else
                                            <a class="btn-back">Retour</a>
                                            <a   class="btn-next">Suivant</a>
                                        @endif
                                    </div>

                                </div>
                                <?php $page++ ?>
                            @endforeach
                        @endfor
                        <?php
                        $i = 0;
                        ?>
                        @for($b=0;$b<$j;$b++)
                            @foreach ($text_libre[$b]  as $text)
                                <input type="hidden" name="fichier{{$i}}">
                                <input type="hidden" name="question_id[{{$i}}]" value="{{$text->question_id}}">

                                <div class="tab-pane " id="tab{{$page+1}}">
                                    <div class="numquestion">question {{$page+1}} sur {{$cou}}</div>
                                    <div class="input-group">
                                        <div class="answ">Question :</div>
                                        <label class="label ques"> {{ $text->question_text }}</label>
                                        <div class="answ" style="margin-bottom: 40px;">Reponse :</div>
                                        <div id="toolbar[{{$i}}]"></div>
                                        <div id="editor[{{$i}}]" style="height: 200px; font-size: 20px;"></div>
                                        <?php
                                        $i++;
                                        ?>
                                        <input type="hidden" name="nb_ql" value="{{$i}}">
                                        <div class="btn-next-con">
                                            @if($cou === 1)
                                                <input type="hidden" name="test_id" value="{{$test1}}">
                                                <button class="btn-last" type="submit" onclick="getHTML()">Valider
                                                </button>
                                            @elseif ($page === 0)<a  class="btn-next">Suivant</a>
                                            @elseif($page === ($cou-1))
                                                <a class="btn-back">Retour</a>
                                                <input type="hidden" name="test_id" value="{{$test1}}">
                                                <button class="btn-last" type="submit" onclick="getHTML()">Valider
                                                </button>
                                            @else
                                                <a class="btn-back">Retour</a>
                                                <a  class="btn-next">Suivant</a>
                                            @endif
                                        </div>

                                    </div>
                                </div>

                                <?php $page++ ?>

                            @endforeach
                        @endfor

                    </div>


                </form>
 </div>
        </div>
    </div>

</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('.pagenum').click(function() {
            var value=$(this).attr("value");
            $len=$('#ziad').find($("input[type='hidden']")).length
            for($i=1;$i<=$len;$i++){
                $("#tab"+$i).removeClass('tab-pane active').addClass('tab-pane');
            }
            $("#tab"+value).addClass('tab-pane active');
            var questionum = $('#js-progress').find('.numb');
            var num = parseInt(questionum.text());
            var shi = $('#js-progress').find('.shi');
            var shii = parseInt(shi.text());
            var fin= 100 - (num * shii);
            var prof=(shii*value)+fin;
            var progressBar = $('#js-progress').find('.progress-bar');
            var progressVal = $('#js-progress').find('.progress-val');
                var val = parseInt(progressBar.text());
                val = prof;
                progressBar.css('width', val+ '%');
                progressVal.text(val+'%');


        });


    });

</script>

<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script>
    /*window.addEventListener("beforeunload", function (event) {
        event.returnValue = "Your custom message.";
    });*/
</script>
<script>
    var container = [];
    @php
        $j = 0;
    @endphp
        @while($j < $i)
        container[{{$j}}] = document.getElementById('editor[{{$j}}]');

    var toolbarOptions = [
        ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
        ['blockquote', 'code-block'],

        [{'header': 1}, {'header': 2}],               // custom button values
        [{'list': 'ordered'}, {'list': 'bullet'}],
        [{'script': 'sub'}, {'script': 'super'}],      // superscript/subscript
        [{'indent': '-1'}, {'indent': '+1'}],          // outdent/indent
        [{'direction': 'rtl'}],                         // text direction

        [{'size': ['small', false, 'large', 'huge']}],  // custom dropdown
        [{'header': [1, 2, 3, 4, 5, 6, false]}],

        [{'color': []}, {'background': []}],          // dropdown with defaults from theme
        [{'font': []}],
        [{'align': []}],

        ['clean']                                         // remove formatting button
    ];
    var options = {
        modules: {
            toolbar: toolbarOptions
        },
        placeholder: 'Ecrire la reponse...',
        theme: 'snow'
    };
    var editor = new Quill(container[{{$j}}], options);

    @php
        $j++;
    @endphp
    @endwhile

    function getHTML() {
        var element = document.querySelectorAll(".ql-editor");
        var i = 0;
        while (i < element.length) {
            var name = document.querySelector('input[name=fichier' + i + ']'); // set name input var
            name.value = element[i].innerHTML.toString();
            i++;
        }
        var form = document.getElementById("js-wizard-form"); // get form by ID
        form.submit();
    }





</script>
<script>

    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
    })
    $('#exampleModal-test').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget)



        var modal = $(this)

        modal.find('.modal-title').text('suprimer cet étudiant');

        modal.find('.modal-body #id').val(id);
    });

</script>

<!-- Jquery JS-->
<script src="{{ asset('/passage_test/vendor/jquery/jquery.min.js') }}"></script>
<!-- Vendor JS-->
<script src="{{ asset('/passage_test/vendor/jquery-validate/jquery.validate.min.js') }}"></script>
<script src="{{ asset('/passage_test/vendor/bootstrap-wizard/bootstrap.min.js') }}"></script>
<script src="{{ asset('/passage_test/vendor/bootstrap-wizard/jquery.bootstrap.wizard.js') }}"></script>

<!-- Main JS-->
<script src="{{ asset('/passage_test/js/main.js') }}"></script>

<script src="{{ asset('/passage_test/js/global.js') }}"></script>
<script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js') }}"></script>
<script src="{{ asset('/passage_test/js/jquery.downCount.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.lightgallery').lightGallery();
    });
</script>
<script src="/passage_test/js/lightgallery-all.min.js"></script>
</body>

</html>
<!-- end document-->
