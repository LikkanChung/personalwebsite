---
title: Scrimmage
date: 2019-05-01
github: https://github.com/brettsaunders21/Scrimmage
---

As part of a group project we created this game. Scrimmage is a multiplayer, free for all death match. 

## What is Scrimmage

Players gain score by being the last player remaining in the map. Once this has happened, the map is changed and all players are spawned in again, and the players again fight to the death. The game is terminated by a timer. When the timer runs out, the players are shown on a podium, in the order of their scores.

This is the content of the website we created to demonstrate this project. The original is [here](https://togetherinthelight.wordpress.com/).
<div class="container">
	<div class="card">
		<img src="/assets/projects/scrimmage/logo.png" alt="">
		<p>A game by Together in the Daylight</p>
		<iframe width="640" height="360" src="https://www.youtube.com/embed/kL33UYmG7q4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		<h3>Welcome to the battlefield!</h3>
		<p>Take up arms in this 2D Brawler style game and Scrim with your friends (and enemies!) as you attempt to apart each other. Go from map to map using the generated weapons to kill the other players and make your way to the top of the Deathmatch rankings.</p>
		<b>Scrim in your creations!</b>
		<img src="/assets/projects/scrimmage/scrimmage-1.png" alt="">
		<p>Using our own level editor, you will be able to make levels as good as the ones that we made, or better! Select any object from a list of available objects and click away, and bring your dreams to combat reality. Want to fill a level with lasers everywhere? Now you can!</p>
		<b>Customise your Scrimmer!</b>
		<img src="/assets/projects/scrimmage/scrimmage-2.png" alt="">
		<p>Select from a cohort of different skins. You aren’t even limited to one specific skin, you can mix and match different limbs at your leisure! Always dreamt of being the muscular ballet solider? Dream no more, and scrim now!</p>
		<b>Join now and earn some early Skins!</b>
		<img src="/assets/projects/scrimmage/scrimmage-3.png" alt="">
		<b>Testimonies</b>
		<ul>
			<li>"This game is pretty fun" - Faisal</li>
			<li>"To be or not to be, and this game be" - Random Scrimmer</li>
			<li>"AI killed me more times than I care to admit" - Everyone</li>
		</ul>
		<b>Meet the Devs</b>
		<p>Together in the Daylight, a play on words on Alone in the Dark. Six students who wanted to go above and beyond on their assignment and make a game that push their abilities to the limit. Did we do it? We sure hope so!</p>
	</div>
</div>

## Why was it made

The project was created as part of a Team Project module at University. In a team of 6, we had 11 weeks to create a video game which included five core features implementing Competitive play, Networking, Aritifical Intelligence, Audio, and User Interface. The project was made in Java, with graphics being supported by the JavaFX library. We were also able to use JUnit, Log4j and Maven to stay productive during development. 

Teamwork was the core learining objective of this module and we successfully created this peoduct with that in mind. We utilised tools such as Slack for communication and Trello for tracking the workflow. Twice weekly meetings allowed us to stay focused and set new targets as we progresserd through the tasks we assigned to ourselves. 

The project mostly followed a full development lifecycle, starting from idea generation, to outlining the system requirement specifications. The final submission of the project required a demonstration, a full report, test plans and UML diagrams. 

## Project Structure

The game is built with a game engine primarily focusing on 'GameObjects'. Almost anything which can be seen visually in the game, as well as things in the background are GameObjects. For example, the Player, Weapons, and Maps are all GameObjects, and in classic OOP style, have their own collection of attributes, methods and GameObjects. For example, the map has a variety of Objects which can be seen such as floor tiles, blocks and backgrounds. Each of these has implemented methods such as render and update, and interactive blocks interface the physics engine which calculates collisions and vector movement. GameObjects also have state sending methods which update the server host of changes to the Objects as the game is played. This structure means that we can easily add components and give behaviour to new types of objects. Simply put, if we wanted to add a new type of object into the map such as a barrel, we could simply make a new barrel GameObject. Implement specific sprite renderings with the renderer instance, and add new the physics engine to it. Making the game by implementing a full game engine was a risk we took early on in the project, but it turned out to work amazingly for our game. 

The Game's AI implementes a simple state automata, with exactly four states - idle, fleeing, attacking or chasing. Each tick of the game, each bot player - which is simple a normal Player GameObject with the AI controlling it, calculates the best next state based on the heuristics we designed. The AI implements a simple A* algorithm to determine the shortest paths to each required Object. When the bot is in an attacking state, the cursor is set to the coordinates of the enemy, and click is set to true at a probability of 0.5. In addition, when the bot comes within range of a weapon that is better than the one that it is currently holding, the bot drops its weapon and picks up the new weapon.

The networking model used to negotiate multiplayer games is the Authorative Server, which is a simulation of the game run on a server, and clients only send updates. The update inputs from the client are applied to the game state and a GameStatePacket is returned to the client with authorative positions and information. We chosen to send update packets to the server via. TCP, due to the importance of reliably taking inputs. However, the packets are returned to the client via. UDP due to the importance of reducing the latency of updated states. The server can also dictate to the client that GameObjects can be deleted by the Java garbage collector to reduce the number of objects created. When a player joins a game, a packet is sent containing all of the player details, as well as a packet with award details at the end of a match - which allows a player's statistics to be updated.