## Goals

Project for Los Altos Hacks II <br>
:round_pushpin: 
Redwood City, CA, USA<br>
:date: 2/4/17-2/5/17

### Inspiration

Goals are important for everyone. When people set goals, they have a tangible endpoint that they wish to reach, helping them to achieve their dreams. Goals wishes to allow users to set goals and keep track of their progress in order to help everyone achieve their dreams. In addition, Goals allows users to receive positive feedback from the community.

### What it does

The user has the ability to create a goal and have the goal published anonymously with a comment system in place to allow other users to provide positive and constructive feedback. Also, users are able to keep track of their progress through the user's dashboard.

### How it works

The android app has many switches on it, which correspond to the electronics wired to the arduino board. When a switch is toggled, it publishes a messege to the IoT PubNub Server, or PubNub Block. Because of PubNubs infrastructure, this can be done quickly from anywhere in the world. We then have a running java program that has a callback registered to the PubNub block, and an event is fired whenever the Android app publishes. The java program then recodes this message so that the arduino can understand it, then sends it to the arduino over serial. The arduino finally decodes this message and tured on the corresponding lights or motors. The java server also analysis the android inputs using a nerual network, which gets trained to a users routine. When the automatic mode switch is chosen on the app, the java program then takes controll over the lights, and turns them on and off according to the routine.
<br>
<br>
<img src="https://github.com/KevinAndMatthewsProjects/IoTSmartHouse/blob/master/img/iotsmarthouse.png" width="420" height="235">
<br>
<br>
<a href="http://imgur.com/2YIALEO">Demo</a>
### Roles
#### Kevin Palani:
* Server Side Programming
* Back End PHP Programming
* Providing difficult Integration problems

 #### Matthew Pham:
* HTML and CSS for Website
* User Dashboard
* Quantum Mechanics Equation Derivation
* Integration: 
<img src="https://github.com/KevinAndMatthewsProjects/Goals/blob/master/img/integration.gif" width="288" height="512">
