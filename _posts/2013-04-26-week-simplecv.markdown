---
layout: post
title:  "This week in SimpleCV"
date:   2013-04-26 10:00:00
---
SimpleCV had a fantastic week. We had a record number of pull requests thanks to our wonderful and talented [Google Summer of Code](https://developers.google.com/open-source/soc/) students. Our prospective students have done a great job of helping us fix bugs and release new features. There is still a week to go before the application deadline. Home highlights of the past couple of weeks include:

- [A new Prewitt edge detector](https://github.com/sightmachine/SimpleCV/pull/433).
- [Motion blur operation](https://github.com/sightmachine/SimpleCV/pull/420).
- [A way cool edge snap feature](https://github.com/sightmachine/SimpleCV/pull/391).
- [Fisher Face recognition module](https://github.com/sightmachine/SimpleCV/pull/421).
- Tons of bug fixes, refactoring, and clean up.


All of our prospective students are doing a fantastic job. This summer is going to be awesome.

**Awesome Time Lapse Video**

User Patrick Benz sent us this great time lapse video of Tuebingen, Germany using SimpleCV. Patrick made the video using IP camera footage streams. The results are fantastic! I liked this video so much I made [a quick example script](https://github.com/sightmachine/SimpleCV/blob/develop/SimpleCV/examples/util/CaptureEncodeUpload.py) to show users how to automatically create and upload their own videos to you using SimpleCV, [FFmpeg](http://www.ffmpeg.org/), and [GoogleCL](https://code.google.com/p/googlecl/). I would love for our users create time lapse videos of their home towns and send them in to us.


<center>
	<br />
	<iframe allowfullscreen="" frameborder="0" height="480" src="http://www.youtube.com/embed/cAL6u6Q0Xuc" width="640"></iframe>
</center>

<br />
Here is the source code: [https://gist.github.com/kscottz/5489687.js](https://gist.github.com/kscottz/5489687.js)
