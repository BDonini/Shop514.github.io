<?php
  function getComments() {
    $comments = Array();
    $temp = explode("\n", file_get_contents('comments.txt'));
    foreach ($temp as $aString) {
      array_push($comments, explode(",", $aString));
    }
    array_pop($comments);
    return $comments;
  }

  function getCommentsByBusinessName($businessName) {
    $comments = Array();
    $allComments = getComments();
    foreach ($allComments as $aComment) {
      if ($businessName === $aComment[0]) {
        array_push($comments, $aComment);
      }
    }
    return $comments;
  }
?>