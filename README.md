SMS Based Quiz framework
========================
This framework provides the host of the quiz to add the questions in quiz.html file along with answers in check.php
The quiz runs on running quiz.html on a web-browser and projecting it on a bigger screen for the contestants.
A phone number is provided at the bottom of the screen for the contestants to sms the answer.
Score is monitored for every phone number in a db
###About###
Developed during Algorhythm'13.

quiz.html starts the quiz on click of button asking new questions every 60 seconds.

Objective is to answer the questions before the timer runs out through a mobile message to the server specifying the option

The answers are saved in check.php which is also responsible for maintaining the score.

ISSUES
======
- Questions are to be added as html inside js string .... js should add these through a file or something
  (possible fix: change quiz.html to quiz.php)
- Initial timer is saved in a file for synchronization purposes, thus app can only work at a single place  
 \(wasn't a very big issue since the quiz was run on a single machine projecting itself to a screen\)
- The initialization link is hardcoded
- A user can message correct answer many times to increase his score
  (possible fix: Adding a column to monitor the last question answered by every mobile number).

