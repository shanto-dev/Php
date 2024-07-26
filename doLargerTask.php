<?php

/**
 * একটা বড় ফাংশনকে ছোট ছোট ফাংশনে ভাগ করে কাজ করা ।
 * এতে করে এরোর ডিবাগিং করা সহজ হয় ।
 */


 function doTaskA(){
    echo "Step A Done <br>";
 }
 function doTaskB(){
    echo "Step B Done <br>";
 }
 function doTaskC(){
    echo "Step C Done <br>";
 }
 function doTaskD(){
    echo "Step D Done <br>";
 }
 function doTaskF(){
    echo "Step F Done <br>";
 }

 function doTheLargerTask(){
    doTaskA();
    doTaskB();
    doTaskC();
    doTaskD();
    doTaskF();
 }

 doTheLargerTask();