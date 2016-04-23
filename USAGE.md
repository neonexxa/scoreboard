# Scoreboard Guideline

Admin guide and usage guide for UTPHAX Training scoreboard

## Getting Started

Usage guidelines for admin panel

go to your browser, enter `localhost/score/scoreboard/`

### <sup>Participant:</sup> Adding Participant

#### Step 1: Click on the add participant 

![Imaage add participant](https://github.com/neonexxa/scoreboard/blob/master/images/addparticipant.JPG)

#### Step 2: Scroll down to create new login

![Image of create login](https://github.com/neonexxa/scoreboard/blob/master/images/scrolltonewlogin.JPG)

#### Step 3: Enter your details, and submit example..

![Image of Submit detail](https://github.com/neonexxa/scoreboard/blob/master/images/submitdetail.JPG)

### <sup>Participant:</sup> Changing/Update/Delete

#### Step 1: go to `localhost/phpmyadmin` , direct to your db(database) and find the table `team_cred`

You can just delete and change anything you want except disturbing the password, if want to generate the password, be sure to understand the encryption type first from the file.

### <sup>Participant:</sup> Match Making Config

#### Step 1: Group mapping ID

![Image of mapping id](https://github.com/neonexxa/scoreboard/blob/master/images/mappingid.JPG)

#### Step 2: Configuring Fixture

Selecting the specific round

![Image of fixture](https://github.com/neonexxa/scoreboard/blob/master/images/selectingfixture.JPG)

Set the fixture or match making

![Image of fixture](https://github.com/neonexxa/scoreboard/blob/master/images/configuringfixture.JPG)

### <sup>Game:</sup> Adding Question

![Image of Qconfig](https://github.com/neonexxa/scoreboard/blob/master/images/qconfig.JPG)

#### Step 1: enter your question/ip/hint 

![Image of entering question](https://github.com/neonexxa/scoreboard/blob/master/images/enterquestion1.JPG)

There qill be four main items need to enter, 

- Question address, which is the address where the question is located
- flaggu/flag, which is the flag that will be submitted (dont worry as this will be encrypted with sha and salt)
- Q(ID), which is the question number and round for example: 

	G11 - Group stage, Round 1, Question number 1
	G12 - Group stage, Round 1, Question number 2
	G13 - Group stage, Round 1, Question number 3

	G21 - Group stage, Round 2, Question number 1
	G22 - Group stage, Round 2, Question number 2

	SF1 - Semi Final stage, Question number 1
	QF1 - Quater Final stage, Question number 1
	FQ1 - Final stage, Question number 1

- Q(points), which is the points given for the corrent answer of the flag

Below is the sample of how to submit/enter a question

![Image of entering question](https://github.com/neonexxa/scoreboard/blob/master/images/enterquestion2.JPG)

### <sup>Game:</sup> Change Question Details

#### Step 1: Select the old Question ID

Find the old Q(ID) and submit a new 1

![Image of round configuration](https://github.com/neonexxa/scoreboard/blob/master/images/qid.JPG)

### <sup>Game:</sup> Round Config

#### Step 1: Go to the Round setting in main menu

![Image of round configuration](https://github.com/neonexxa/scoreboard/blob/master/images/rconfig.JPG)

#### Step 2: Select the appropriate round you want

![Image of round configuration](https://github.com/neonexxa/scoreboard/blob/master/images/selectround.jpg)

## Having fun?

Its good to see you reviewing the guideline, hope to see alot of modification done by you guys. 

JUST REMEMBER TO INCLUDE OUR __[LICENSE](https://github.com/neonexxa/scoreboard/blob/master/LICENSE)__ FILE IN YOUR FOLDER.

## THANK YOU 