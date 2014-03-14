SMS Based Quiz framework
========================
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
