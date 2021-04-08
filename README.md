# luckFactory
Card game 21
Card game 21 you will need to create is type of 21 game where you have to pick cards from top to be as close to 21 as possible
and have higher score as oponent.
Initial state
You have randomly shuffled deck of 52 cards, 4 cards of each kind - 2, 3, 4, 5, 6, 7, 8, 9, 10, J, Q, K, A.
There are 2 players that will play game - computer and player.
Gameplay
Each card has value associated with it.
Cards: 2, 3, 4, 5, 6, 7, 8, 9, 10, J, Q, K, A
Values: 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 11, 11, 1
Computers turn
Tell in STDOUT that its computer turn.
>>> Computer is picking cards.
Computer has to pick from top all the cards it can to not pass 21. For example:
do
pick_card;
while computerScore <= 21
Players turn
Tell in STDOUT that its players turn.
>>> Player is picking cards.
Software has to ask player if player wants to pick a card from top or not. If player says "no" stop players turn.
>>>
>>>
yes
>>>
>>>
no
Player is picking cards.
Pick a card (yes/no)?
You picked 9. Your score is 9.
Pick a card (yes/no)?
Resolution
When all turns have ended, you have to tell what are computers, players scores and tell who won.>>> Computers score 18, player score 9.
>>> Computer won!
Goal of task
100% solution of course involves working game. But main goal is to understand your OOP skills. Not so much syntax as
understnading how real life objects can be represented in OOP. This will carry the most weight in evaluation. Please approach
this task with KISS principle in mind.
IMPORTANT! If its not possible to create OOP code in language you do this task in. Use proper code structuring methods of
specific language.
