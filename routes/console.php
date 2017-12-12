<?php

    use Illuminate\Foundation\Inspiring;

    /*
    |--------------------------------------------------------------------------
    | Console Routes
    |--------------------------------------------------------------------------
    |
    | This file is where you may define all of your Closure based console
    | commands. Each Closure is bound to a command instance allowing a
    | simple approach to interacting with each command's IO methods.
    |
    */

    Artisan::command('seed-db', function () {

        $article = new \App\Article();
        $article->article = 'THE MEN OF BREWSTER PLACE
    Clifford Jackson, or Abshu, as he preferred to be
known in the streets, had committed himself several
years ago to use his talents as a playwright to broaden
the horizons for the young, gifted, and black—which
5was how he saw every child milling around that dark
street. As head of the community center he went after
every existing grant on the city and state level to bring
them puppet shows with the message to avoid drugs
and stay in school; and plays in the park such as actors
10rapping their way through Shakespeare’s A Midsummer
Night\'s Dream. Abshu believed there was something in
Shakespeare for everyone, even the young of Brewster
Place, and if he broadened their horizons just a little
bit, there might be enough room for some of them to
15slip through and see what the world had waiting. No, it
would not be a perfect world, but definitely one with
more room than they had now.
    The kids who hung around the community center
liked Abshu, because he never preached and it was
20clear that when they spoke he listened; so he could zero
in on the kid who had a real problem. It might be an
offhand remark while shooting a game of pool or a one-
on-one out on the basketball court, but he had a way of
making them feel special with just a word or two.
25     Abshu wished that his own family could have
stayed together. There were four of them who ended up
in foster care: him, two younger sisters, and a baby
brother. He understood why his mother did what she
did, but he couldn\'t help wondering if there might have
30been a better way.
    Abshu was put into a home that already had two
other boys from foster care. The Masons lived in a
small wooden bungalow right on the edge of Linden
Hills. And Mother Mason insisted that they tell any-
35body who asked that they actually lived in Linden
Hills, a more prestigious address than Summit Place. It
was a home that was kept immaculate.
    But what he remembered most about the Masons
was that it seemed there was never quite enough to eat.
40She sent them to school with a lunch of exactly one and
a half sandwiches—white bread spread with margarine
and sprinkled with sugar—and half an apple.
    When Abshu dreamed of leaving—which was
every day—he had his own apartment with a refrigera-
45tor overflowing with food that he gorged himself with
day and night. The Masons weren’t mean people; he
knew he could have ended up with a lot worse.
    Abshu lived with these people for nine years, won
a scholarship to the local college, and moved out to
50support himself through school by working in a dough-
nut shop. By this time his mother was ready to take her
children back home, but he decided that since he was
already out on his own he would stay there. One less
mouth for her to worry about feeding. And after he
55graduated with his degree in social work, he might even
be able to give her a little money to help her along.
    One thing he did thank the Masons for was keep-
ing him out of gangs. There was a strict curfew in their
home that was rigidly observed. And church was
60mandatory. "When you’re out on your own," Father
Mason always said, “you can do whatever you want,
but in my home you do as I say.” No, they weren\'t
mean people, but they were stingy—stingy with their
food and with their affection. Existing that way all the
65time, on the edge of hunger, on the edge of kindness,
gave Abshu an appreciation for a life fully lived. Do
whatever job makes you happy, regardless of the cost;
and fill your home with love. Well, his home became
the community center right around the corner from
70Brewster Place and the job that made him most fulfilled
was working with young kids.
    The kids who hung out at the community center
weren’t all lost yet. They wanted to make use of the
tutors for their homework; and they wanted a safe place
75to hang. His motto was: Lose no child to the streets.
And on occasion when that happened, he went home to
cry. But he never let his emotions show at work. To the
kids he was just a big, quiet kind of dude who didn\'t go
looking for trouble, but he wouldn’t run from it either.
80He was always challenged by a new set of boys who
showed up at the center. He made it real clear to them
that this was his territory—his rules—and if they
needed to flex their muscles, they were welcome to try.
And he showed many that just because he was kind, it
85didn’t mean he was weak. There had to be rules some-
in their world, some kind of discipline. And if
they understood that, then he worked with them, long
and hard, to let them see that they could make a differ-
ence in their own lives.
';
        $article->save();

        $articleID = $article->id;


        $question1 = new \App\Question();
        $question1->question = 'The point of view from which the passage is told can best be described as that of:
    Individual Question';
        $question1->difficulty_id = 1;//or 2 or 3
        $question1->type_id = 1;//1 for reading and 2 for writing
        $question1->article_id = $articleID;//you only need this line for the reading type

        $question1->save();

        $answer1 = new \App\Answer();
        $answer1->answer = 'a man looking back on the best years of his life as director of a community center in a strife-ridden neighborhood.';
        $answer1->is_correct = true; //only if answe is true
        $answer1->question_id = $question1->id; //the question id
        $answer1->save();

        $answer1 = new \App\Answer();
        $answer1->answer = 'a narrator describing his experiences as they happen, starting with childhood and continuing through his adult years as an advocate for troubled children.';
        $answer1->is_correct = true; //only if answe is true
        $answer1->question_id = $question1->id; //the question id
        $answer1->save();

        $answer1 = new \App\Answer();
        $answer1->answer = 'an unidentified narrator describing a man who devoted his life to neighborhood children years after his own difficult childhood.';
        $answer1->is_correct = true; //only if answe is true
        $answer1->question_id = $question1->id; //the question id

        $answer1->save();
        $answer1 = new \App\Answer();
        $answer1->answer = 'an admiring relative of a man whose generosity with children was widely respected in the neighborhood where he turned around a declining community center.e';
        $answer1->is_correct = true; //only if answe is true
        $answer1->question_id = $question1->id; //the question id

        $answer1->save();

        $question2 = new \App\Question();
        $question2->question = 'It can reasonably be inferred from the passage that which of the following is a cherished dream that Abshu expects to make a reality in his lifetime?
    Individual Question';
        $question2->difficulty_id = 1;//or 2 or 3
        $question2->type_id = 1;//1 for reading and 2 for writing
        $question2->article_id = $articleID;//you only need this line for the reading type

        $question2->save();

        $answer2 = new \App\Answer();
        $answer2->answer = 'Establishing himself financially so as to be able to bring his original family back under one roof';
        $answer2->is_correct = false; //only if answe is true
        $answer2->question_id = $question2->id; //the question id
        $answer2->save();

        $answer2 = new \App\Answer();
        $answer2->answer = 'Seeing the children at the community center shift their interest from sports to the dramatic arts
    ';
        $answer2->is_correct = true; //only if answe is true
        $answer2->question_id = $question2->id; //the question id
        $answer2->save();

        $answer2 = new \App\Answer();
        $answer2->answer = 'Building on the success of the community center by opening other centers like it throughout the state';
        $answer2->is_correct = false; //only if answe is true
        $answer2->question_id = $question2->id; //the question id

        $answer2->save();

        $answer2 = new \App\Answer();
        $answer2->answer = 'Expanding for some, if not all, of the children the vision they have of themselves and their futures';
        $answer2->is_correct = false; //only if answe is true
        $answer2->question_id = $question2->id; //the question id

        $answer2->save();

        $question3 = new \App\Question();
        $question3->question = 'It can reasonably be inferred from the passage that Abshu and the Masons would agree with which of the following statements about the best way to raise a child?
    Individual Question';
        $question3->difficulty_id = 1;//or 2 or 3
        $question3->type_id = 1;//1 for reading and 2 for writing
        $question3->article_id = $articleID;//you only need this line for the reading type

        $question3->save();
        $answer3 = new \App\Answer();
        $answer3->answer = 'For a child to be happy, he or she must develop a firm basis in religion at an early age.';
        $answer3->is_correct = true; //only if answe is true
        $answer3->question_id = $question3->id; //the question id

        $answer3->save();
        $answer3 = new \App\Answer();
        $answer3->answer = 'For a child to be fulfilled, he or she must be exposed to great works of art and literature that contain universal themes.';
        $answer3->is_correct = true; //only if answe is true
        $answer3->question_id = $question3->id; //the question id

        $answer3->save();
        $answer3 = new \App\Answer();
        $answer3->answer = 'For a child to thrive and be a responsible member of society, he or she must develop a sense of discipline.';
        $answer3->is_correct = false; //only if answe is true
        $answer3->question_id = $question3->id; //the question id
        $answer3->save();
        $answer3 = new \App\Answer();
        $answer3->answer = 'For a child to achieve greatness, he or she must attach importance to the community and not to the self.';
        $answer3->is_correct = false; //only if answe is true
        $answer3->question_id = $question3->id; //the question id
        $answer3->save();
        $question4 = new \App\Question();
        $question4->question = 'The fourth paragraph (lines 31–37) establishes all of the following EXCEPT: Individual Question';
        $question4->difficulty_id = 1;//or 2 or 3
        $question4->type_id = 1;//1 for reading and 2 for writing
        $question4->article_id = $articleID;//you only need this line for the reading type

        $question4->save();
        $answer4 = new \App\Answer();
        $answer4->answer = 'that Abshu had foster brothers.';
        $answer4->is_correct = false; //only if answe is true
        $answer4->question_id = $question4->id; //the question id

        $answer4->save();
        $answer4 = new \App\Answer();
        $answer4->answer = 'that the Masons maintained a clean house.';
        $answer4->is_correct = false; //only if answe is true
        $answer4->question_id = $question4->id; //the question id
        $answer4->save();
        $answer4 = new \App\Answer();
        $answer4->answer = 'how Mother Mason felt about the location of their house.';
        $answer4->is_correct = true; //only if answe is true
        $answer4->question_id = $question4->id; //the question id
        $answer4->save();
        $answer4 = new \App\Answer();
        $answer4->answer = 'what Abshu remembered most about his years with the Masons.';
        $answer4->is_correct = false; //only if answe is true
        $answer4->question_id = $question4->id; //the question id
        $answer4->save();
        $question5 = new \App\Question();
        $question5->question = 'It can reasonably be inferred that which of the following characters from the passage lives according to Abshu’s definition of a life fully lived?';
        $question5->difficulty_id = 1;//or 2 or 3
        $question5->type_id = 1;//1 for reading and 2 for writing
        $question5->article_id = $articleID;//you only need this line for the reading type
        $question5->save();
        $answer5 = new \App\Answer();
        $answer5->answer = 'Mother Mason';
        $answer5->is_correct = false; //only if answe is true
        $answer5->question_id = $question5->id; //the question id

        $answer5->save();
        $answer5 = new \App\Answer();
        $answer5->answer = 'Father Mason';
        $answer5->is_correct = false; //only if answe is true
        $answer5->question_id = $question5->id; //the question id
        $answer5->save();
        $answer5 = new \App\Answer();
        $answer5->answer = 'Abshu as a child';
        $answer5->is_correct = false; //only if answe is true
        $answer5->question_id = $question5->id; //the question id
        $answer5->save();
        $answer5 = new \App\Answer();
        $answer5->answer = 'Abshu as an adult';
        $answer5->is_correct = true; //only if answe is true
        $answer5->question_id = $question5->id; //the question id
        $answer5->save();

    })->describe('seed db with questions and answers');

    Artisan::command('seed-db-2', function () {

        $article = new \App\Article();
        $article->article = 'THE MEN OF BREWSTER PLACE
    Clifford Jackson, or Abshu, as he preferred to be
known in the streets, had committed himself several
years ago to use his talents as a playwright to broaden
the horizons for the young, gifted, and black—which
5was how he saw every child milling around that dark
street. As head of the community center he went after
every existing grant on the city and state level to bring
them puppet shows with the message to avoid drugs
and stay in school; and plays in the park such as actors
10rapping their way through Shakespeare’s A Midsummer
Night\'s Dream. Abshu believed there was something in
Shakespeare for everyone, even the young of Brewster
Place, and if he broadened their horizons just a little
bit, there might be enough room for some of them to
15slip through and see what the world had waiting. No, it
would not be a perfect world, but definitely one with
more room than they had now.
    The kids who hung around the community center
liked Abshu, because he never preached and it was
20clear that when they spoke he listened; so he could zero
in on the kid who had a real problem. It might be an
offhand remark while shooting a game of pool or a one-
on-one out on the basketball court, but he had a way of
making them feel special with just a word or two.
25     Abshu wished that his own family could have
stayed together. There were four of them who ended up
in foster care: him, two younger sisters, and a baby
brother. He understood why his mother did what she
did, but he couldn\'t help wondering if there might have
30been a better way.
    Abshu was put into a home that already had two
other boys from foster care. The Masons lived in a
small wooden bungalow right on the edge of Linden
Hills. And Mother Mason insisted that they tell any-
35body who asked that they actually lived in Linden
Hills, a more prestigious address than Summit Place. It
was a home that was kept immaculate.
    But what he remembered most about the Masons
was that it seemed there was never quite enough to eat.
40She sent them to school with a lunch of exactly one and
a half sandwiches—white bread spread with margarine
and sprinkled with sugar—and half an apple.
    When Abshu dreamed of leaving—which was
every day—he had his own apartment with a refrigera-
45tor overflowing with food that he gorged himself with
day and night. The Masons weren’t mean people; he
knew he could have ended up with a lot worse.
    Abshu lived with these people for nine years, won
a scholarship to the local college, and moved out to
50support himself through school by working in a dough-
nut shop. By this time his mother was ready to take her
children back home, but he decided that since he was
already out on his own he would stay there. One less
mouth for her to worry about feeding. And after he
55graduated with his degree in social work, he might even
be able to give her a little money to help her along.
    One thing he did thank the Masons for was keep-
ing him out of gangs. There was a strict curfew in their
home that was rigidly observed. And church was
60mandatory. "When you’re out on your own," Father
Mason always said, “you can do whatever you want,
but in my home you do as I say.” No, they weren\'t
mean people, but they were stingy—stingy with their
food and with their affection. Existing that way all the
65time, on the edge of hunger, on the edge of kindness,
gave Abshu an appreciation for a life fully lived. Do
whatever job makes you happy, regardless of the cost;
and fill your home with love. Well, his home became
the community center right around the corner from
70Brewster Place and the job that made him most fulfilled
was working with young kids.
    The kids who hung out at the community center
weren’t all lost yet. They wanted to make use of the
tutors for their homework; and they wanted a safe place
75to hang. His motto was: Lose no child to the streets.
And on occasion when that happened, he went home to
cry. But he never let his emotions show at work. To the
kids he was just a big, quiet kind of dude who didn\'t go
looking for trouble, but he wouldn’t run from it either.
80He was always challenged by a new set of boys who
showed up at the center. He made it real clear to them
that this was his territory—his rules—and if they
needed to flex their muscles, they were welcome to try.
And he showed many that just because he was kind, it
85didn’t mean he was weak. There had to be rules some-
in their world, some kind of discipline. And if
they understood that, then he worked with them, long
and hard, to let them see that they could make a differ-
ence in their own lives.
';
        $article->save();

        $articleID = $article->id;


        $question1 = new \App\Question();
        $question1->question = 'The point of view from which the passage is told can best be described as that of:
    Individual Question
    ';
        $question1->difficulty_id = 1;//or 2 or 3
        $question1->type_id = 1;//1 for reading and 2 for writing
        $question1->article_id = $articleID;//you only need this line for the reading type

        $question1->save();

        $answer1 = new \App\Answer();
        $answer1->answer = 'a man looking back on the best years of his life as director of a community center in a strife-ridden neighborhood.
    ';
        $answer1->is_correct = true; //only if answe is true
        $answer1->question_id = $question1->id; //the question id
        $answer1->save();

        $answer1 = new \App\Answer();
        $answer1->answer = 'a narrator describing his experiences as they happen, starting with childhood and continuing through his adult years as an advocate for troubled children.
    ';
        $answer1->is_correct = true; //only if answe is true
        $answer1->question_id = $question1->id; //the question id
        $answer1->save();

        $answer1 = new \App\Answer();
        $answer1->answer = 'an unidentified narrator describing a man who devoted his life to neighborhood children years after his own difficult childhood.
    ';
        $answer1->is_correct = true; //only if answe is true
        $answer1->question_id = $question1->id; //the question id

        $answer1->save();
        $answer1 = new \App\Answer();
        $answer1->answer = 'an admiring relative of a man whose generosity with children was widely respected in the neighborhood where he turned around a declining community center.e
    ';
        $answer1->is_correct = true; //only if answe is true
        $answer1->question_id = $question1->id; //the question id

        $answer1->save();

        $question2 = new \App\Question();
        $question2->question = 'It can reasonably be inferred from the passage that which of the following is a cherished dream that Abshu expects to make a reality in his lifetime?
    Individual Question
    ';
        $question2->difficulty_id = 1;//or 2 or 3
        $question2->type_id = 1;//1 for reading and 2 for writing
        $question2->article_id = $articleID;//you only need this line for the reading type

        $question2->save();

        $answer2 = new \App\Answer();
        $answer2->answer = 'Establishing himself financially so as to be able to bring his original family back under one roof
    ';
        $answer2->is_correct = false; //only if answe is true
        $answer2->question_id = $question2->id; //the question id
        $answer2->save();

        $answer2 = new \App\Answer();
        $answer2->answer = 'Seeing the children at the community center shift their interest from sports to the dramatic arts
    ';
        $answer2->is_correct = true; //only if answe is true
        $answer2->question_id = $question2->id; //the question id
        $answer2->save();

        $answer2 = new \App\Answer();
        $answer2->answer = 'Building on the success of the community center by opening other centers like it throughout the state
    ';
        $answer2->is_correct = false; //only if answe is true
        $answer2->question_id = $question2->id; //the question id

        $answer2->save();

        $answer2 = new \App\Answer();
        $answer2->answer = 'Expanding for some, if not all, of the children the vision they have of themselves and their futures
    ';
        $answer2->is_correct = false; //only if answe is true
        $answer2->question_id = $question2->id; //the question id

        $answer2->save();

        $question3 = new \App\Question();
        $question3->question = 'It can reasonably be inferred from the passage that Abshu and the Masons would agree with which of the following statements about the best way to raise a child?
    Individual Question
    ';
        $question3->difficulty_id = 1;//or 2 or 3
        $question3->type_id = 1;//1 for reading and 2 for writing
        $question3->article_id = $articleID;//you only need this line for the reading type

        $question3->save();
        $answer3 = new \App\Answer();
        $answer3->answer = 'For a child to be happy, he or she must develop a firm basis in religion at an early age.
    ';
        $answer3->is_correct = true; //only if answe is true
        $answer3->question_id = $question3->id; //the question id

        $answer3->save();
        $answer3 = new \App\Answer();
        $answer3->answer = 'For a child to be fulfilled, he or she must be exposed to great works of art and literature that contain universal themes.
    ';
        $answer3->is_correct = true; //only if answe is true
        $answer3->question_id = $question3->id; //the question id

        $answer3->save();
        $answer3 = new \App\Answer();
        $answer3->answer = 'For a child to thrive and be a responsible member of society, he or she must develop a sense of discipline.
    ';
        $answer3->is_correct = false; //only if answe is true
        $answer3->question_id = $question3->id; //the question id
        $answer3->save();
        $answer3 = new \App\Answer();
        $answer3->answer = 'For a child to achieve greatness, he or she must attach importance to the community and not to the self.
    ';
        $answer3->is_correct = false; //only if answe is true
        $answer3->question_id = $question3->id; //the question id
        $answer3->save();
        $question4 = new \App\Question();
        $question4->question = 'The fourth paragraph (lines 31–37) establishes all of the following EXCEPT:
    Individual Question
    ';
        $question4->difficulty_id = 1;//or 2 or 3
        $question4->type_id = 1;//1 for reading and 2 for writing
        $question4->article_id = $articleID;//you only need this line for the reading type

        $question4->save();
        $answer4 = new \App\Answer();
        $answer4->answer = 'That Abshu had foster brothers.
    ';
        $answer4->is_correct = false; //only if answe is true
        $answer4->question_id = $question4->id; //the question id

        $answer4->save();
        $answer4 = new \App\Answer();
        $answer4->answer = 'That the Masons maintained a clean house.
    ';
        $answer4->is_correct = false; //only if answe is true
        $answer4->question_id = $question4->id; //the question id
        $answer4->save();
        $answer4 = new \App\Answer();
        $answer4->answer = 'How Mother Mason felt about the location of their house.
    ';
        $answer4->is_correct = true; //only if answe is true
        $answer4->question_id = $question4->id; //the question id
        $answer4->save();
        $answer4 = new \App\Answer();
        $answer4->answer = 'what Abshu remembered most about his years with the Masons.
    ';
        $answer4->is_correct = false; //only if answe is true
        $answer4->question_id = $question4->id; //the question id
        $answer4->save();
        $question5 = new \App\Question();
        $question5->question = 'It can reasonably be inferred that which of the following characters from the passage lives according to Abshu’s definition of a life fully lived?
  ';
        $question5->difficulty_id = 1;//or 2 or 3
        $question5->type_id = 1;//1 for reading and 2 for writing
        $question5->article_id = $articleID;//you only need this line for the reading type
        $question5->save();
        $answer5 = new \App\Answer();
        $answer5->answer = 'Mother Mason
    ';
        $answer5->is_correct = false; //only if answe is true
        $answer5->question_id = $question5->id; //the question id

        $answer5->save();
        $answer5 = new \App\Answer();
        $answer5->answer = 'Father Mason
    ';
        $answer5->is_correct = false; //only if answe is true
        $answer5->question_id = $question5->id; //the question id
        $answer5->save();
        $answer5 = new \App\Answer();
        $answer5->answer = 'Abshu as a child
    ';
        $answer5->is_correct = false; //only if answe is true
        $answer5->question_id = $question5->id; //the question id
        $answer5->save();
        $answer5 = new \App\Answer();
        $answer5->answer = 'Abshu as an adult
    ';
        $answer5->is_correct = true; //only if answe is true
        $answer5->question_id = $question5->id; //the question id
        $answer5->save();

    })->describe('seed db with questions and answers');


    Artisan::command('seed-db-3', function () {

        $article = new \App\Article();
        $article->article = 'PERSONALITY DISORDERS

    How should the law treat a mentally disturbed

person who commits a criminal offense? Should indi-

viduals whose mental faculties are impaired be held

responsible for their actions? These questions are of

5concern to social scientists, to members of the legal

profession, and to individuals who work with criminal

offenders.

    Over the centuries, an important part of Western

law has been the concept that a civilized society should

10not punish a person who is mentally incapable of con-

trolling his or her conduct. In 1724, an English court

maintained that a man was not responsible for an act if

“he doth not know what he is doing, no more than . . . a

wild beast.” Modern standards of legal responsibility,

15however, have been based on the McNaghten decision

of 1843. McNaghten, a Scotsman, suffered the paranoid

delusion that he was being persecuted by the English

prime minister, Sir Robert Peel. In an attempt to kill

Peel, he mistakenly shot Peel’s secretary. Everyone

20involved in the trial was convinced by McNaghten’s

senseless ramblings that he was insane. He was judged

not responsible by reason of insanity and sent to a

mental hospital, where he remained until his death. But

Queen Victoria was not pleased with the verdict—

25apparently she felt that political assassinations should

not be taken lightly—and called on the House of Lords

to review the decision. The decision was upheld and

rules for the legal definition of insanity were put into

writing. The McNaghten Rule states that a defendant

30may be found “not guilty by reason of insanity” only if

he were so severely disturbed at the time of his act that

he did not know what he was doing, or that if he did

know what he was doing, he did not know it was wrong.

35    The McNaghten Rule was adopted in the United

States, and the distinction of knowing right from wrong

remained the basis of most decisions of legal insanity

for over a century. Some states added to their statutes

the doctrine of “irresistible impulse,” which recognizes

40that some mentally ill individuals may respond cor

-rectly when asked if a particular act is morally right or

wrong but still be unable to control their behavior.

    During the 1970s, a number of state and federal

courts adopted a broader legal definition of insanity

45proposed by the American Law Institute, which states:

“A person is not responsible for criminal conduct if at

the time of such conduct, as a result of mental disease

or defect, he lacks substantial capacity either to appre

-ciate the wrongfulness of his conduct or to conform his

50conduct to the requirements of the law.” The word sub

-stantial suggests that “any” incapacity is not enough to

avoid criminal responsibility but that “total” incapacity

is not required either. The use of the word appreciate

rather than know implies that intellectual awareness of

55right or wrong is not enough; individuals must have

some understanding of the moral or legal consequences

of their behavior before they can be held criminally

responsible.

    The problem of legal responsibility in the case of

60mentally disordered individuals is currently a topic of

intense debate, and a number of legal and mental health

professionals have recommended abolishing the

insanity plea as a defense. The reasons for this recom

-mendation are varied. Many experts believe that the

65current courtroom procedures—in which psychiatrists

and psychologists for the prosecution and the defense

present contradictory evidence as to the defendant’s

mental state—are confusing to the jury and do little to

help the cause of justice. Some also argue that the

70abuse of the insanity plea by clever lawyers has

allowed too many criminals to escape conviction.

Others claim that acquittal by reason of insanity often

leads to a worse punishment (an indeterminate sentence

to an institution for the criminally insane that may con-

75fine a person for life) than being convicted and sent to

prison (with the possibility of parole in a few years).

    Despite the current controversy, actual cases of

acquittal by reason of insanity are quite rare. Jurors

seem reluctant to believe that people are not morally

80responsible for their acts, and lawyers, knowing that an

insanity plea is apt to fail, tend to use it only as a last

resort. In California in 1980, only 259 defendants (out

of approximately 52,000) were successful in pleading

not guilty by reason of insanity.
';
        $article->save();

        $articleID = $article->id;


        $question1 = new \App\Question();
        $question1->question = 'One of the author’s main points about the legal concept of responsibility in the passage is that:
';
        $question1->difficulty_id = 1;//or 2 or 3
        $question1->type_id = 1;//1 for reading and 2 for writing
        $question1->article_id = $articleID;//you only need this line for the reading type

        $question1->save();

        $answer1 = new \App\Answer();
        $answer1->answer = 'the phrase “not guilty by reason of insanity” has made our legal system more efficient.';
        $answer1->is_correct = true; //only if answe is true
        $answer1->question_id = $question1->id; //the question id

        $answer1->save();
        $answer1 = new \App\Answer();
        $answer1->answer = 'responsibility and guilt are legal concepts, and their meanings can be modified';
        $answer1->is_correct = true; //only if answe is true
        $answer1->question_id = $question1->id; //the question id
        $answer1->save();
        $answer1 = new \App\Answer();
        $answer1->answer = 'knowing right from wrong is a simple matter of admitting the truth to oneself.';
        $answer1->is_correct = true; //only if answe is true
        $answer1->question_id = $question1->id; //the question id
        $answer1->save();
        $answer1 = new \App\Answer();
        $answer1->answer = 'people can become severely disturbed without a word of warning to anyone.';
        $answer1->is_correct = true; //only if answe is true
        $answer1->question_id = $question1->id; //the question id
        $answer1->save();
        $question2 = new \App\Question();
        $question2->question = 'Based on the passage, the primary purpose for the 1970s redefinition of insanity proposed by the American Law Institute was to:
Individual Question
';
        $question2->difficulty_id = 1;//or 2 or 3
        $question2->type_id = 1;//1 for reading and 2 for writing
        $question2->article_id = $articleID;//you only need this line for the reading type

        $question2->save();

        $answer2 = new \App\Answer();
        $answer2->answer = 'eliminate the insanity defense from American courtrooms.';
        $answer2->is_correct = false; //only if answe is true
        $answer2->question_id = $question2->id; //the question id
        $answer2->save();
        $answer2 = new \App\Answer();
        $answer2->answer = 'more precisely define the concepts of responsibility and intellectual capacity.';
        $answer2->is_correct = true; //only if answe is true
        $answer2->question_id = $question2->id; //the question id
        $answer2->save();
        $answer2 = new \App\Answer();
        $answer2->answer = 'Building on the success of the community center by opening other centers like it throughout the state
';
        $answer2->is_correct = false; //only if answe is true
        $answer2->question_id = $question2->id; //the question id
        $answer2->save();
        $answer2 = new \App\Answer();
        $answer2->answer = 'apply the McNaghten Rule only to trials involving cases of mistaken identity.';
        $answer2->is_correct = false; //only if answe is true
        $answer2->question_id = $question2->id; //the question id
        $answer2->save();
        $question3 = new \App\Question();
        $question3->question = 'From information in the third and fourth paragraphs (lines 35–58) it can reasonably be inferred that the legal definition of insanity was changed in the 1970s after:
Individual Question
';
        $question3->difficulty_id = 1;//or 2 or 3
        $question3->type_id = 1;//1 for reading and 2 for writing
        $question3->article_id = $articleID;//you only need this line for the reading type
        $question3->save();
        $answer3 = new \App\Answer();
        $answer3->answer = 'federal courts won a dispute with state courts over a proposal made by the American Law Institute.';
        $answer3->is_correct = true; //only if answe is true
        $answer3->question_id = $question3->id; //the question id
        $answer3->save();
        $answer3 = new \App\Answer();
        $answer3->answer = 'the doctrine of “irresistible impulse” was found to contradict accepted notions of justice.';
        $answer3->is_correct = true; //only if answe is true
        $answer3->question_id = $question3->id; //the question id
        $answer3->save();
        $answer3 = new \App\Answer();
        $answer3->answer = 'proponents of the McNaghten Rule had been using the insanity defense in far too many murder trials.';
        $answer3->is_correct = false; //only if answe is true
        $answer3->question_id = $question3->id; //the question id
        $answer3->save();
        $answer3 = new \App\Answer();
        $answer3->answer = 'several courts found that justice was not always best served when the McNaghten Rule was applied.';
        $answer3->is_correct = false; //only if answe is true
        $answer3->question_id = $question3->id; //the question id
        $answer3->save();
        $question4 = new \App\Question();
        $question4->question = 'According to the explanation provided in the fourth paragraph (lines 43–58), use of the word appreciate in the phrase “to appreciate the wrongfulness” (lines 48–49) instead of know implies which of the following?
Individual Question
';
        $question4->difficulty_id = 1;//or 2 or 3
        $question4->type_id = 1;//1 for reading and 2 for writing
        $question4->article_id = $articleID;//you only need this line for the reading type
        $question4->save();
        $answer4 = new \App\Answer();
        $answer4->answer = 'The difference between right and wrong is something people feel rather than know, which makes deciding legal responsibility difficult.';
        $answer4->is_correct = false; //only if answe is true
        $answer4->question_id = $question4->id; //the question id
        $answer4->save();
        $answer4 = new \App\Answer();
        $answer4->answer = 'To know implies certainty, and distinguishing right from wrong is often a subjective matter in determining legal responsibility.';
        $answer4->is_correct = false; //only if answe is true
        $answer4->question_id = $question4->id; //the question id
        $answer4->save();
        $answer4 = new \App\Answer();
        $answer4->answer = 'The word appreciate suggests that an action and that action’s implications must be understood for there to be legal responsibility.';
        $answer4->is_correct = true; //only if answe is true
        $answer4->question_id = $question4->id; //the question id
        $answer4->save();
        $answer4 = new \App\Answer();
        $answer4->answer = 'An insane person would “know” something the way a sane person would “know” something, and be able to appreciate that knowledge, too.';
        $answer4->is_correct = false; //only if answe is true
        $answer4->question_id = $question4->id; //the question id
        $answer4->save();
        $question5 = new \App\Question();
        $question5->question = 'The passage indicates that the McNaghten case became the basis for future decisions about legal insanity because:
Individual Question
';
        $question5->difficulty_id = 1;//or 2 or 3
        $question5->type_id = 1;//1 for reading and 2 for writing
        $question5->article_id = $articleID;//you only need this line for the reading type
        $question5->save();
        $answer5 = new \App\Answer();
        $answer5->answer = 'the House of Lords upheld the verdict of the court despite considerable political pressure.';
        $answer5->is_correct = false; //only if answe is true
        $answer5->question_id = $question5->id; //the question id
        $answer5->save();
        $answer5 = new \App\Answer();
        $answer5->answer = 'there had been an increase in cases of murder involving mistaken identity arising from delusions.';
        $answer5->is_correct = false; //only if answe is true
        $answer5->question_id = $question5->id; //the question id
        $answer5->save();
        $answer5 = new \App\Answer();
        $answer5->answer = 'McNaghten was unable to convince the jury at his trial that he was incoherent and insane.';
        $answer5->is_correct = false; //only if answe is true
        $answer5->question_id = $question5->id; //the question id
        $answer5->save();
        $answer5 = new \App\Answer();
        $answer5->answer = 'McNaghten used a gun to commit murder, thus aggravating the crime in the jury’s mind.';
        $answer5->is_correct = true; //only if answe is true
        $answer5->question_id = $question5->id; //the question id
        $answer5->save();

    })->describe('seed db with questions and answers');


    Artisan::command('seed-db-4', function () {

        $article = new \App\Article();
        $article->article = 'A POEM OF ONE’S OWN

    The time is overdue to admit that there is some-

thing of a vacuum in women’s poetry, and that we

abhor it. For a woman to concede this is not disloyal to

her sex; it’s the first step in the creation of an environ-

5ment in which women artists will flourish. But what

can be done about the fact that the list of beloved

women poets is not as long as the list of beloved poets

who were born male?

    The most liberating response to the problem was

10the one Elizabeth Bishop chose. As James Merrill

writes, “Lowell called her one of the four best women

poets ever—which can hardly have pleased Miss

Bishop, who kept her work from appearing in ‘women’s

anthologies.’ Better, from her point of view, to be one

15of the forty, or forty thousand, best poets, and have

done with it.” And he adds, “If I raise the issue at all,

it’s to dissociate her from these shopworn polarities.”

For the working poet, moved by the sexless sunset or

the sex-indeterminate beetle, the polarities are indeed

20shopworn, but perhaps as readers we may pursue the

issue an inch further. For one thing that we can do

about these two unequal lists is to read women poets of

the past who have never been much read and to dis-

cover whether or not they deserve to be.

25    Emily Dickinson, after all, would never have

become one of the most revered poets in the world had

her sister Lavinia not rescued her poems from the

obscurity of a dresser drawer; and had her editor Mabel

Loomis Todd not painstakingly transcribed nearly illeg-

30ible scraps using a bizarre typewriter. Helen Hunt

Jackson, that once celebrated, now forgotten poet

whose work Dickinson herself admired, was another

“sister” in this story, for she alone fully understood

Dickinson’s gifts. Jackson wrote to Dickinson urging

35her to publish: “You are a great poet—and it is wrong

to the day you live in, that you will not sing aloud,” her

letter went. “When you are what men call dead, you

will be sorry you were so stingy.” That has to be one of

the most moving moments in American literary history.

40    And yet, and yet. Another reason many of us are

devoted to Dickinson is that we love the romance of her

story. Dickinson has to be one of the luckiest great

writers who ever lived. She chose to live in isolation,

which meant she was saved from the corruption of the

45literary crowd; no husband ever patted her head dismis-

sively, no child ever interrupted her, and when her life

was finished a team of disciples ensured her immor-

tality. If we do the necessary work of reappraising the

literary “canon,” and if we add some new women’s

50names to the reading list, we will nonetheless have to

settle for discoveries less dramatic than Lavinia

Dickinson’s, and we can’t expect them to appear with

frequency.

    For the fact is that we can’t have it both ways. We

55can’t simultaneously espouse the line that women

haven’t until recently been allowed the depth of educa-

tion and experience to become Shakespeare, while also

claiming that we really have an abundance of

Shakespeares, if anybody would just take the time to

60read us.

    But what is all this rating and counting and classi-

fying of authors about anyway? If we set up one writer

against another, aren’t we giving in to what some femi-

nists tell us is the adversarial mentality of patriarchal

65culture? We may think of Matthew Arnold’s view of

the function of criticism—“to learn and propagate the

best that is known and thought”—and squirm in our

chairs: Who’s to say what is best, who’s to say what is

relevant?

70    Theoretically, these questions are of some interest.

Practically speaking, most of us who are habitual

readers of poetry already have an answer. While

acknowledging our profound differences of taste, we

never doubt that there are good poems and terrible

75poems, and that the good ones are the only ones we

have time for.

    What else can be done about the fact that the list of

the best women poets is not as long as the men’s list?

In addition to looking closely for unjustly neglected

80women, one might question whether some men poets

have been overrated. I think, for some reason, of poets

whose names contain double Ws—William Wordsworth,

Walt Whitman, William Carlos Williams—and while I

would be sorry to throw out the entire oeuvre of them, I

85confess that each of these poets has at times bored me to

tears.

    The problem with taking men poets down a peg,

however, is that it’s hard to do so with discernment.

The zeal to undo, immediately, the centuries of neglect

90and abuse endured by women poets has resulted in the

devaluation of great poets who were born male and (far

worse) in the devaluation of poetry itself.
';
        $article->save();

        $articleID = $article->id;
        $question1 = new \App\Question();
        $question1->question = 'Which of the following most fully lists solutions considered by the author to the problem that the list of beloved women poets is not nearly as long as the list of beloved men poets?
Individual Question
    ';
        $question1->difficulty_id = 1;//or 2 or 3
        $question1->type_id = 1;//1 for reading and 2 for writing
        $question1->article_id = $articleID;//you only need this line for the reading type

        $question1->save();

        $answer1 = new \App\Answer();
        $answer1->answer = 'Reading women poets who have never been read, rejecting the writing of those whose names contain double Ws, and redefining what’s good about the literary canon    ';
        $answer1->is_correct = true; //only if answe is true
        $answer1->question_id = $question1->id; //the question id
        $answer1->save();
        $answer1 = new \App\Answer();
        $answer1->answer = 'Reappraising the literary canon, adding new women’s names to the list, weighing the importance of some male poets, and reading work by women as yet not widely read    ';
        $answer1->is_correct = true; //only if answe is true
        $answer1->question_id = $question1->id; //the question id
        $answer1->save();
        $answer1 = new \App\Answer();
        $answer1->answer = 'Questioning the importance of some male poets, encouraging readers to study women’s journals, and creating a world in which women will flourish    ';
        $answer1->is_correct = true; //only if answe is true
        $answer1->question_id = $question1->id; //the question id
        $answer1->save();
        $answer1 = new \App\Answer();
        $answer1->answer = 'Promoting the best work of current women writers, rediscovering older writers, reappraising Matthew Arnold’s view of criticism, and acknowledging differences in literary taste    ';
        $answer1->is_correct = true; //only if answe is true
        $answer1->question_id = $question1->id; //the question id
        $answer1->save();
        $question2 = new \App\Question();
        $question2->question = 'Which of the following sentences best summarizes the first paragraph?
    Individual Question
    ';
        $question2->difficulty_id = 1;//or 2 or 3
        $question2->type_id = 1;//1 for reading and 2 for writing
        $question2->article_id = $articleID;//you only need this line for the reading type

        $question2->save();

        $answer2 = new \App\Answer();
        $answer2->answer = 'It is disloyal to encourage women to write, and to ask: Why do male poets flourish more readily than female poets?    ';
        $answer2->is_correct = false; //only if answe is true
        $answer2->question_id = $question2->id; //the question id
        $answer2->save();
        $answer2 = new \App\Answer();
        $answer2->answer = 'We must ask why there are so few women writers; perhaps asking this question will help create a women-centered culture.    ';
        $answer2->is_correct = true; //only if answe is true
        $answer2->question_id = $question2->id; //the question id
        $answer2->save();
        $answer2 = new \App\Answer();
        $answer2->answer = 'It can be liberating to ask questions such as: What can be done about the fact that there are fewer beloved male poets than female poets?    ';
        $answer2->is_correct = false; //only if answe is true
        $answer2->question_id = $question2->id; //the question id
        $answer2->save();
        $answer2 = new \App\Answer();
        $answer2->answer = 'If we admit that there is not enough quality poetry written by women, it can make it easier to discover why this is so, and help us change the situation.    ';
        $answer2->is_correct = false; //only if answe is true
        $answer2->question_id = $question2->id; //the question id
        $answer2->save();
        $question3 = new \App\Question();
        $question3->question = 'It may reasonably be inferred from lines 10–17 that James Merrill respected Elizabeth Bishop’s poetry:
    Individual Question
    ';
        $question3->difficulty_id = 1;//or 2 or 3
        $question3->type_id = 1;//1 for reading and 2 for writing
        $question3->article_id = $articleID;//you only need this line for the reading type
        $question3->save();
        $answer3 = new \App\Answer();
        $answer3->answer = 'and wished that reaction to her poems had not been complicated by gender issues.    ';
        $answer3->is_correct = true; //only if answe is true
        $answer3->question_id = $question3->id; //the question id
        $answer3->save();
        $answer3 = new \App\Answer();
        $answer3->answer = 'but was disturbed by her refusal to be included in women’s anthologies.    ';
        $answer3->is_correct = true; //only if answe is true
        $answer3->question_id = $question3->id; //the question id
        $answer3->save();
        $answer3 = new \App\Answer();
        $answer3->answer = 'but felt she should be more concerned with women’s issues.    ';
        $answer3->is_correct = false; //only if answe is true
        $answer3->question_id = $question3->id; //the question id
        $answer3->save();
        $answer3 = new \App\Answer();
        $answer3->answer = 'and was glad she was one of the four best women poets ever.    ';
        $answer3->is_correct = false; //only if answe is true
        $answer3->question_id = $question3->id; //the question id
        $answer3->save();
        $question4 = new \App\Question();
        $question4->question = 'According to the third paragraph (lines 25–39), Emily Dickinson’s career was helped by Helen Hunt Jackson, who:
    Individual Question
    ';
        $question4->difficulty_id = 1;//or 2 or 3
        $question4->type_id = 1;//1 for reading and 2 for writing
        $question4->article_id = $articleID;//you only need this line for the reading type
        $question4->save();
        $answer4 = new \App\Answer();
        $answer4->answer = 'published her; Mabel Loomis Todd, who transcribed her writing; and Lavinia Dickinson, who discovered her poems in a cabinet.    ';
        $answer4->is_correct = false; //only if answe is true
        $answer4->question_id = $question4->id; //the question id
        $answer4->save();
        $answer4 = new \App\Answer();
        $answer4->answer = 'encouraged her; Mabel Loomis Todd, who transcribed her work using a bizarre machine; and Lavinia Dickinson, who rescued her work from oblivion.    ';
        $answer4->is_correct = false; //only if answe is true
        $answer4->question_id = $question4->id; //the question id
        $answer4->save();
        $answer4 = new \App\Answer();
        $answer4->answer = 'encouraged her sister to keep writing; Mabel Loomis Todd, who convinced her to use a typewriter; and Lavinia Dickinson, who rescued her poems from a dresser drawer.    ';
        $answer4->is_correct = true; //only if answe is true
        $answer4->question_id = $question4->id; //the question id
        $answer4->save();
        $answer4 = new \App\Answer();
        $answer4->answer = 'taught her; Mabel Loomis Todd, who translated her writing into English; and Lavinia Dickinson, who introduced her poems to the public.    ';
        $answer4->is_correct = false; //only if answe is true
        $answer4->question_id = $question4->id; //the question id
        $answer4->save();
        $question5 = new \App\Question();
        $question5->question = 'Which of the following most clearly distinguishes between the “two ways” suggested by the author’s assertion that “we can’t have it both ways” (line 54)?
    Individual Question
  ';
        $question5->difficulty_id = 1;//or 2 or 3
        $question5->type_id = 1;//1 for reading and 2 for writing
        $question5->article_id = $articleID;//you only need this line for the reading type
        $question5->save();
        $answer5 = new \App\Answer();
        $answer5->answer = 'Women haven’t until recently been allowed to see the depths in Shakespeare, but nobody bothers to read Shakespeare anyway    ';
        $answer5->is_correct = false; //only if answe is true
        $answer5->question_id = $question5->id; //the question id
        $answer5->save();
        $answer5 = new \App\Answer();
        $answer5->answer = 'Women haven’t written as well as men because they’ve been too busy being spouses, but nobody takes time to read women writers anyway.    ';
        $answer5->is_correct = false; //only if answe is true
        $answer5->question_id = $question5->id; //the question id
        $answer5->save();
        $answer5 = new \App\Answer();
        $answer5->answer = 'Women haven’t written as well as men because they have not had the same educational opportunities, yet there are many great women writers no one reads.    ';
        $answer5->is_correct = false; //only if answe is true
        $answer5->question_id = $question5->id; //the question id
        $answer5->save();
        $answer5 = new \App\Answer();
        $answer5->answer = 'Women have always had an abundance of Shakespeares, yet have not experienced the kind of education it takes to appreciate Shakespeare.    ';
        $answer5->is_correct = true; //only if answe is true
        $answer5->question_id = $question5->id; //the question id
        $answer5->save();

    })->describe('seed db with questions and answers');


    Artisan::command('seed-db-5', function () {

        $article = new \App\Article();
        $article->article = 'PASSAGE A: IN ORBIT

        July 20, 1969: I’m running in a wide circle at the

    far end of the cul-de-sac, around and around until I

    settle in the dust under a thorny bush, but then my

    name floats into the game, calling me back as dusk

    5descends on the neighborhood. Other names unfurl like

    ribbons, doors opening and closing—Bobby, Brenda,

    Laura!—and none of us kids even says goodbye, we

    just disperse, our small band so easily dissolved. I

    leave my perfect hiding place—knees scratched, my

    10hair smelling of sap—to go back inside, where it’s too

    hot and smells of stuffed cabbage, the television on to

    the evening news. Father, mother, brothers—we’re all

    angled toward the television because something

    momentous is about to happen: the first man to walk on

    15the moon.

        Somehow we’re going to see it. We’ll see

    Armstrong in his space suit emerge from the metal

    door; we’ll see it as if looking through a scratched and

    dirty window, with blips and bleeps and static and a

    20shimmering gray overlaying everything because he’s

    out there now, a lone man in a different atmosphere

    altogether, moving backward down the ladder one slow

    step at a time. And then, right before his foot touches

    down in the dust, the words that will become an

    25emblem: one small step for man, one giant leap for

    mankind. He does it, takes a little hop down onto that

    alien surface, the only man in the universe.

        Everyone is sitting quiet, watching, forks in

    midair—I can see the profile of my father’s jaw, my

    30mother’s small shoulders—and just at that moment, I

    decide to clank my fork on the edge of my plate, to

    make a loud noise that will penetrate the vast silence in

    which this man now moves. Everyone turns toward me:

    father, mother, brothers, angry, annoyed, and my father

    35says well, thank you very much, and I know I’ve ruined

    it, this historic moment.

        I don’t know why I did it: maybe I just feel vastly

    lonely, want to make my presence known, or maybe I

    thought it would be funny, or maybe I was kind of

    40applauding, the way the men in Houston must have

    been jumping up and down, shaking hands, mission

    accomplished after so many years of study and work

    and planning, they had done it, they had put a man on

    the moon! My faux-pas just hangs in the air, the clank

    45of the fork still hurting my ears. They turn back to the

    television, the set of their bodies so solidly against me,

    and I guess I don’t really understand why it would be

    so great—to be a man on the moon, exiled, in orbit so

    far from home.

    Questions 1–3 ask about Passage A.
    ';
        $article->save();

        $articleID = $article->id;


        $question1 = new \App\Question();
        $question1->question = 'The last paragraph of Passage A (lines 37–49) marks a shift in the passage from:
              Individual Question
            ';
        $question1->difficulty_id = 3;//or 2 or 3
        $question1->type_id = 1;//1 for reading and 2 for writing
        $question1->article_id = $articleID;//you only need this line for the reading type

        $question1->save();

        $answer1 = new \App\Answer();
        $answer1->answer = 'a description of events leading up to a sudden action by the narrator to a reflection on the intentions and meanings behind that action.        ';
        $answer1->is_correct = true; //only if answe is true
        $answer1->question_id = $question1->id; //the question id
        $answer1->save();
        $answer1 = new \App\Answer();
        $answer1->answer = 'an overview of a family dilemma to an explanation of how the narrator solved that dilemma.        ';
        $answer1->is_correct = true; //only if answe is true
        $answer1->question_id = $question1->id; //the question id
        $answer1->save();
        $answer1 = new \App\Answer();
        $answer1->answer = 'an example of the narrator’s typical response to family events to an analysis of the narrator’s personality.        ';
        $answer1->is_correct = true; //only if answe is true
        $answer1->question_id = $question1->id; //the question id
        $answer1->save();
        $answer1 = new \App\Answer();
        $answer1->answer = 'a chronology of a historical event to a summary of the narrator’s circumstances at the time.        ';
        $answer1->is_correct = true; //only if answe is true
        $answer1->question_id = $question1->id; //the question id
        $answer1->save();
        $question2 = new \App\Question();
        $question2->question = 'In Passage A, the narrator’s descriptions of Armstrong suggest that she sees him as ultimately:        Individual Question
            ';
        $question2->difficulty_id = 3;//or 2 or 3
        $question2->type_id = 1;//1 for reading and 2 for writing
        $question2->article_id = $articleID;//you only need this line for the reading type

        $question2->save();

        $answer2 = new \App\Answer();
        $answer2->answer = 'self-confident and triumphant.        ';
        $answer2->is_correct = false; //only if answe is true
        $answer2->question_id = $question2->id; //the question id
        $answer2->save();
        $answer2 = new \App\Answer();
        $answer2->answer = 'isolated and alone.        ';
        $answer2->is_correct = true; //only if answe is true
        $answer2->question_id = $question2->id; //the question id
        $answer2->save();
        $answer2 = new \App\Answer();
        $answer2->answer = 'awe-inspiring and heroic.        ';
        $answer2->is_correct = false; //only if answe is true
        $answer2->question_id = $question2->id; //the question id
        $answer2->save();
        $answer2 = new \App\Answer();
        $answer2->answer = 'stiff and ceremonial.        ';
        $answer2->is_correct = false; //only if answe is true
        $answer2->question_id = $question2->id; //the question id
        $answer2->save();
        $question3 = new \App\Question();
        $question3->question = 'The narrator of Passage A most nearly suggests that her family is angry and annoyed with her for clanking her fork on her plate because the noise:
              Individual Question
            ';
        $question3->difficulty_id = 3;//or 2 or 3
        $question3->type_id = 1;//1 for reading and 2 for writing
        $question3->article_id = $articleID;//you only need this line for the reading type
        $question3->save();
        $answer3 = new \App\Answer();
        $answer3->answer = 'demonstrates that the narrator has not been watching the broadcast.        ';
        $answer3->is_correct = true; //only if answe is true
        $answer3->question_id = $question3->id; //the question id
        $answer3->save();
        $answer3 = new \App\Answer();
        $answer3->answer = 'disrupts the family’s observance of a momentous event.        ';
        $answer3->is_correct = true; //only if answe is true
        $answer3->question_id = $question3->id; //the question id
        $answer3->save();
        $answer3 = new \App\Answer();
        $answer3->answer = 'causes the family to worry about the outcome of Armstrong’s endeavor.        ';
        $answer3->is_correct = false; //only if answe is true
        $answer3->question_id = $question3->id; //the question id
        $answer3->save();
        $answer3 = new \App\Answer();
        $answer3->answer = 'drowns out the sound from the television.        ';
        $answer3->is_correct = false; //only if answe is true
        $answer3->question_id = $question3->id; //the question id
        $answer3->save();
        $question4 = new \App\Question();
        $question4->question = 'The narrator’s statement “I am looking at the MOON, I told myself, I am looking at the MOON” (lines 60–62) is most nearly meant to:
            Individual Question
            ';
        $question4->difficulty_id = 3;//or 2 or 3
        $question4->type_id = 1;//1 for reading and 2 for writing
        $question4->article_id = $articleID;//you only need this line for the reading type
        $question4->save();
        $answer4 = new \App\Answer();
        $answer4->answer = 'reflect the excitement of the astronauts as they prepare to land.        ';
        $answer4->is_correct = false; //only if answe is true
        $answer4->question_id = $question4->id; //the question id

        $answer4->save();
        $answer4 = new \App\Answer();
        $answer4->answer = 'illustrate the narrator’s disappointment with the moon’s barren appearance.        ';
        $answer4->is_correct = false; //only if answe is true
        $answer4->question_id = $question4->id; //the question id
        $answer4->save();
        $answer4 = new \App\Answer();
        $answer4->answer = 'express the narrator’s irritation at having to wait for Apollo to land.        ';
        $answer4->is_correct = true; //only if answe is true
        $answer4->question_id = $question4->id; //the question id
        $answer4->save();
        $answer4 = new \App\Answer();
        $answer4->answer = 'convey the narrator’s awe at the event that is being broadcast.        ';
        $answer4->is_correct = false; //only if answe is true
        $answer4->question_id = $question4->id; //the question id
        $answer4->save();
        $question5 = new \App\Question();
        $question5->question = 'Passage B indicates that compared to the narrator’s expectation about how the first person walking on the moon would be televised, the broadcast itself was:
          ';
        $question5->difficulty_id = 3;//or 2 or 3
        $question5->type_id = 1;//1 for reading and 2 for writing
        $question5->article_id = $articleID;//you only need this line for the reading type
        $question5->save();
        $answer5 = new \App\Answer();
        $answer5->answer = 'similar; the narrator had expected the television companies to prolong the event with preliminary material.        ';
        $answer5->is_correct = false; //only if answe is true
        $answer5->question_id = $question5->id; //the question id
        $answer5->save();
        $answer5 = new \App\Answer();
        $answer5->answer = 'similar; the narrator had expected Armstrong would be chosen to walk on the moon’s surface.        ';
        $answer5->is_correct = false; //only if answe is true
        $answer5->question_id = $question5->id; //the question id
        $answer5->save();
        $answer5 = new \App\Answer();
        $answer5->answer = 'dissimilar; the narrator had expected there would be cities on the moon before a moon walk would be televised.        ';
        $answer5->is_correct = false; //only if answe is true
        $answer5->question_id = $question5->id; //the question id
        $answer5->save();
        $answer5 = new \App\Answer();
        $answer5->answer = 'dissimilar; the narrator had expected to see Armstrong’s moon walk shortly after the lunar vehicle landed.        ';
        $answer5->is_correct = true; //only if answe is true
        $answer5->question_id = $question5->id; //the question id
        $answer5->save();

    })->describe('seed db with questions and answers');


    Artisan::command('seed-db-6', function () {

        $article = new \App\Article();
        $article->article = 'VATICAN CITY’S WONDERS
        Surrounded by the ancient city of
    Rome, Vatican City is an independent nation
    on the west bank of the Tiber River. This tiny
    country—about one-sixth of a square mile in all—is
    also home to a disproportionately large number of
    sites with great historical, artistic, and which have
    religious significance.
        The Vatican Museums house a great many valuable
    paintings, sculptures, pieces of jewelry, and tapestries,
    as well as the world’s most extensive collections of
    ancient manuscripts. Scholars often probe the museums’
    archives of early written works for insights into lives
    led long ago.
        Accordingly, St. Peter’s Basilica, the largest
    cathedral in the Northern Hemisphere, is remarkable.
    Built upon second-century foundations. St. Peter’s
    features a dome designed by the artist and architect
    Michelangelo.10 Intricate mosaics—enormous
    “paintings” fashioned from millions of tiny cut stones
    of various colors—lining each of the basilica’s several
    smaller domes. The marble floor, with its intricate
    designs, covers the cathedral’s catacombs, where
    popes are buried. Sculptures by Michelangelo and
    Bernini, including Michelangelo’s poignant Pietà,
    contributes to the basilica’s beauty.
        However, to many, the most spectacular part of
    Vatican City is the Sistine Chapel. This vast chapel
    displays what many consider some of the most
    important works of Renaissance art: Michelangelo’s
    awe-inspiring frescoes. These frescoes—paintings
    made on freshly spread, still-moist plaster—capture
    the attention of viewers with a complex array of
    religious images. One of his most famous frescoes,
    The Last Judgment, is painted on the west wall. A
    series of interrelated frescoes covers the vaulted ceiling.
        Despite its small size, Vatican City offers its
    many visitors a chance to see a wide range of historical
    and artistic wonders. It is easy to understand why the
    city has become one of the most frequently visited
    places in the world.

    ';
        $article->save();

        $articleID = $article->id;


        $question1 = new \App\Question();
        $question1->question = 'Given that all of the choices are true, which one best supports the sentence’s claim about Vatican City’s status as an independent nation?
                Individual Question
                ';
        $question1->difficulty_id = 2;//or 2 or 3
        $question1->type_id = 2;//1 for reading and 2 for writing
        $question1->article_id = $articleID;//you only need this line for the reading type

        $question1->save();

        $answer1 = new \App\Answer();
        $answer1->answer = 'NO CHANGE
                ';
        $answer1->is_correct = true; //only if answe is true
        $answer1->question_id = $question1->id; //the question id
        $answer1->save();
        $answer1 = new \App\Answer();
        $answer1->answer = 'with an interesting past.            ';
        $answer1->is_correct = true; //only if answe is true
        $answer1->question_id = $question1->id; //the question id
        $answer1->save();
        $answer1 = new \App\Answer();
        $answer1->answer = 'with its own government, banking system, postal service, and army.           ';
        $answer1->is_correct = true; //only if answe is true
        $answer1->question_id = $question1->id; //the question id
        $answer1->save();
        $answer1 = new \App\Answer();
        $answer1->answer = 'that has to import most of its supplies, even such necessities as food and water.            ';
        $answer1->is_correct = true; //only if answe is true
        $answer1->question_id = $question1->id; //the question id
        $answer1->save();
        $question2 = new \App\Question();
        $question2->question = 'Choose the best answer.
                Individual Question
                ';
        $question2->difficulty_id = 2;//or 2 or 3
        $question2->type_id = 2;//1 for reading and 2 for writing
        $question2->article_id = $articleID;//you only need this line for the reading type

        $question2->save();

        $answer2 = new \App\Answer();
        $answer2->answer = 'NO CHANGE
                 ';
        $answer2->is_correct = false; //only if answe is true
        $answer2->question_id = $question2->id; //the question id
        $answer2->save();
        $answer2 = new \App\Answer();
        $answer2->answer = 'approximately about one-sixth of a square mile, all told—            ';
        $answer2->is_correct = true; //only if answe is true
        $answer2->question_id = $question2->id; //the question id
        $answer2->save();
        $answer2 = new \App\Answer();
        $answer2->answer = 'a grand total sum of about one-sixth of a square mile—
                ';
        $answer2->is_correct = false; //only if answe is true
        $answer2->question_id = $question2->id; //the question id
        $answer2->save();
        $answer2 = new \App\Answer();
        $answer2->answer = 'a total of about one-sixth of a square mile when added together—
                ';
        $answer2->is_correct = false; //only if answe is true
        $answer2->question_id = $question2->id; //the question id
        $answer2->save();
        $question3 = new \App\Question();
        $question3->question = 'Choose the best answer.
                Individual Question
                ';
        $question3->difficulty_id = 2;//or 2 or 3
        $question3->type_id = 2;//1 for reading and 2 for writing
        $question3->article_id = $articleID;//you only need this line for the reading type
        $question3->save();
        $answer3 = new \App\Answer();
        $answer3->answer = 'NO CHANGE
                ';
        $answer3->is_correct = true; //only if answe is true
        $answer3->question_id = $question3->id; //the question id
        $answer3->save();
        $answer3 = new \App\Answer();
        $answer3->answer = 'having            ';
        $answer3->is_correct = true; //only if answe is true
        $answer3->question_id = $question3->id; //the question id
        $answer3->save();
        $answer3 = new \App\Answer();
        $answer3->answer = 'as well as            ';
        $answer3->is_correct = false; //only if answe is true
        $answer3->question_id = $question3->id; //the question id
        $answer3->save();
        $answer3 = new \App\Answer();
        $answer3->answer = 'DMIT the underlined portion.            ';
        $answer3->is_correct = false; //only if answe is true
        $answer3->question_id = $question3->id; //the question id
        $answer3->save();
        $question4 = new \App\Question();
        $question4->question = 'If the writer were to delete the words tiny and disproportionatelyfrom the preceding sentence, the sentence would primarily lose:
                Individual Question
                ';
        $question4->difficulty_id = 2;//or 2 or 3
        $question4->type_id = 2;//1 for reading and 2 for writing
        $question4->article_id = $articleID;//you only need this line for the reading type
        $question4->save();
        $answer4 = new \App\Answer();
        $answer4->answer = 'elements of the setting of the essay.            ';
        $answer4->is_correct = false; //only if answe is true
        $answer4->question_id = $question4->id; //the question id
        $answer4->save();

        $answer4 = new \App\Answer();
        $answer4->answer = 'a contrast emphasizing the unusual number of sites.            ';
        $answer4->is_correct = false; //only if answe is true
        $answer4->question_id = $question4->id; //the question id
        $answer4->save();
        $answer4 = new \App\Answer();
        $answer4->answer = 'details that stress how important the sites are.            ';
        $answer4->is_correct = true; //only if answe is true
        $answer4->question_id = $question4->id; //the question id
        $answer4->save();
        $answer4 = new \App\Answer();
        $answer4->answer = 'a comparison between Vatican City and Rome.            ';
        $answer4->is_correct = false; //only if answe is true
        $answer4->question_id = $question4->id; //the question id
        $answer4->save();
        $question5 = new \App\Question();
        $question5->question = 'Given that all of the choices are true, which one best emphasizes the extent and worth of the museums’ holdings?
        	   Individual Question
              ';
        $question5->difficulty_id = 2;//or 2 or 3
        $question5->type_id = 2;//1 for reading and 2 for writing
        $question5->article_id = $articleID;//you only need this line for the reading type
        $question5->save();
        $answer5 = new \App\Answer();
        $answer5->answer = 'NO CHANGE
                ';
        $answer5->is_correct = false; //only if answe is true
        $answer5->question_id = $question5->id; //the question id
        $answer5->save();
        $answer5 = new \App\Answer();
        $answer5->answer = 'thousands of invaluable            ';
        $answer5->is_correct = false; //only if answe is true
        $answer5->question_id = $question5->id; //the question id
        $answer5->save();
        $answer5 = new \App\Answer();
        $answer5->answer = 'numerous important            ';
        $answer5->is_correct = false; //only if answe is true
        $answer5->question_id = $question5->id; //the question id
        $answer5->save();
        $answer5 = new \App\Answer();
        $answer5->answer = 'a group of precious            ';
        $answer5->is_correct = true; //only if answe is true
        $answer5->question_id = $question5->id; //the question id
        $answer5->save();

    })->describe('seed db with questions and answers');


    Artisan::command('seed-db-7', function () {

        $article = new \App\Article();
        $article->article = 'edna gellhorn’s “walkless-talkless parade”

        in 1916, as the democratic party’s national

    convention met in st. louis, missouri, to nominate

    candidates for the presidency and vice-presidency

    and to establish a platform, a set of positions on

    issues. therefore, suffragists (those who advocated

    extending voting rights to women) wanted the

    democrats’ platform to support women’s right to vote.

        [1] edna gellhorn, a leader in the missouri

    equal suffrage league, planned a “silent parade”

    without movement or music or speech. [2] she gathered

    together 7,000 st. louis women. [3] similar forms

    of demonstrations, known as “walkless-talkless

    parades,” had been adopted by national woman

    suffrage organizations in washington, d.c. [4] gellhorn

    made telephone calls and wrote letters. [5] they donned

    yellow sashes over white dresses and held yellow

    umbrellas aloft as they lined both sides of locust

    street between the convention delegates’ hotel and

    the meeting hall. 7

        at the end of the “golden lane,” as the event was

    also called, gellhorn organized a three-tiered “living

    tableau,” which a live scene was presented by silent,

    costumed participants. women wearing white

    represented states where women could vote. others

    wore gray to represent states with partial suffrage

    (women could vote in school board elections, for

    example). women draped in black represented states

    that refused women the vote. this group held out

    manacled hands to them as a reminder that, without

    the vote, women were deprived of their freedom.

    at the top of the tiers, stood a woman dressed as

    lady liberty.

        edna gellhorn witnessed a victory that year

    when votes for women would became part of the 1916

    democratic party’s set of positions, or platform. then

    finally in august 1920, after more than seventy years

    and countless parades, speeches, letters, and calls, the

    nineteenth amendment, to the u.s. constitution, was

    ratified, thus giving all women the right to vote.
    ';
        $article->save();

        $articleID = $article->id;

        $question1 = new \App\Question();
        $question1->question = 'Choose the best answer.
                Individual Question
                ';
        $question1->difficulty_id = 3;//or 2 or 3
        $question1->type_id = 2;//1 for reading and 2 for writing
        $question1->article_id = $articleID;//you only need this line for the reading type

        $question1->save();

        $answer1 = new \App\Answer();
        $answer1->answer = 'NO CHANGE
                ';
        $answer1->is_correct = true; //only if answe is true
        $answer1->question_id = $question1->id; //the question id
        $answer1->save();
        $answer1 = new \App\Answer();
        $answer1->answer = 'while            ';
        $answer1->is_correct = true; //only if answe is true
        $answer1->question_id = $question1->id; //the question id
        $answer1->save();
        $answer1 = new \App\Answer();
        $answer1->answer = 'when           ';
        $answer1->is_correct = true; //only if answe is true
        $answer1->question_id = $question1->id; //the question id
        $answer1->save();
        $answer1 = new \App\Answer();
        $answer1->answer = 'OMIT the underlined portion.            ';
        $answer1->is_correct = true; //only if answe is true
        $answer1->question_id = $question1->id; //the question id
        $answer1->save();
        $question2 = new \App\Question();
        $question2->question = 'Choose the best answer.
                Individual Question
                ';
        $question2->difficulty_id = 3;//or 2 or 3
        $question2->type_id = 2;//1 for reading and 2 for writing
        $question2->article_id = $articleID;//you only need this line for the reading type

        $question2->save();

        $answer2 = new \App\Answer();
        $answer2->answer = 'NO CHANGE
                 ';
        $answer2->is_correct = false; //only if answe is true
        $answer2->question_id = $question2->id; //the question id
        $answer2->save();
        $answer2 = new \App\Answer();
        $answer2->answer = 'for, the presidencyfor: the presidency            ';
        $answer2->is_correct = true; //only if answe is true
        $answer2->question_id = $question2->id; //the question id
        $answer2->save();
        $answer2 = new \App\Answer();
        $answer2->answer = 'for: the presidency
                ';
        $answer2->is_correct = false; //only if answe is true
        $answer2->question_id = $question2->id; //the question id
        $answer2->save();
        $answer2 = new \App\Answer();
        $answer2->answer = 'for the presidency,
                ';
        $answer2->is_correct = false; //only if answe is true
        $answer2->question_id = $question2->id; //the question id
        $answer2->save();
        $question3 = new \App\Question();
        $question3->question = 'Choose the best answer.
                Individual Question
                ';
        $question3->difficulty_id = 3;//or 2 or 3
        $question3->type_id = 2;//1 for reading and 2 for writing
        $question3->article_id = $articleID;//you only need this line for the reading type
        $question3->save();
        $answer3 = new \App\Answer();
        $answer3->answer = 'NO CHANGE
                ';
        $answer3->is_correct = true; //only if answe is true
        $answer3->question_id = $question3->id; //the question id
        $answer3->save();
        $answer3 = new \App\Answer();
        $answer3->answer = 'Similarly, suffragists            ';
        $answer3->is_correct = true; //only if answe is true
        $answer3->question_id = $question3->id; //the question id
        $answer3->save();
        $answer3 = new \App\Answer();
        $answer3->answer = 'However, suffragists            ';
        $answer3->is_correct = false; //only if answe is true
        $answer3->question_id = $question3->id; //the question id
        $answer3->save();
        $answer3 = new \App\Answer();
        $answer3->answer = 'Suffragists            ';
        $answer3->is_correct = false; //only if answe is true
        $answer3->question_id = $question3->id; //the question id
        $answer3->save();
        $question4 = new \App\Question();
        $question4->question = 'Choose the best answer.
                Individual Question
                ';
        $question4->difficulty_id = 3;//or 2 or 3
        $question4->type_id = 2;//1 for reading and 2 for writing
        $question4->article_id = $articleID;//you only need this line for the reading type
        $question3->save();
        $answer4 = new \App\Answer();
        $answer4->answer = 'NO CHANGE
                ';
        $answer4->is_correct = false; //only if answe is true
        $answer4->question_id = $question4->id; //the question id
        $answer4->save();
        $answer4 = new \App\Answer();
        $answer4->answer = 'movement or music or,            ';
        $answer4->is_correct = false; //only if answe is true
        $answer4->question_id = $question4->id; //the question id
        $answer4->save();
        $answer4 = new \App\Answer();
        $answer4->answer = 'movement or, music or,            ';
        $answer4->is_correct = true; //only if answe is true
        $answer4->question_id = $question4->id; //the question id
        $answer4->save();
        $answer4 = new \App\Answer();
        $answer4->answer = 'movement: or music or            ';
        $answer4->is_correct = false; //only if answe is true
        $answer4->question_id = $question4->id; //the question id
        $answer4->save();
        $question5 = new \App\Question();
        $question5->question = 'Choose the best answer.
        	   Individual Question
              ';
        $question5->difficulty_id = 3;//or 2 or 3
        $question5->type_id = 2;//1 for reading and 2 for writing
        $question5->article_id = $articleID;//you only need this line for the reading type
        $question5->save();
        $answer5 = new \App\Answer();
        $answer5->answer = 'NO CHANGE
                ';
        $answer5->is_correct = false; //only if answe is true
        $answer5->question_id = $question5->id; //the question id
        $answer5->save();
        $answer5 = new \App\Answer();
        $answer5->answer = 'have been            ';
        $answer5->is_correct = false; //only if answe is true
        $answer5->question_id = $question5->id; //the question id
        $answer5->save();
        $answer5 = new \App\Answer();
        $answer5->answer = 'having been            ';
        $answer5->is_correct = false; //only if answe is true
        $answer5->question_id = $question5->id; //the question id
        $answer5->save();
        $answer5 = new \App\Answer();
        $answer5->answer = 'OMIT the underlined portion.            ';
        $answer5->is_correct = true; //only if answe is true
        $answer5->question_id = $question5->id; //the question id
        $answer5->save();

    })->describe('seed db with questions and answers');


    Artisan::command('seed-db-8', function () {

        $article = new \App\Article();
        $article->article = 'A MICROSCOPE IN THE KITCHEN
    I grew up with buckets\, shovels, and nets waiting by the back door; hip-waders hanging in the closet; tide table charts covering the refrigerator door; and a microscope was sitting on the kitchen table. Having studied, my mother is a marine biologist. Our household might have been described as uncooperative. Our meals weren’t always served in the expected order of breakfast, lunch, and supper. Everything was subservient to the disposal of the tides. When the tide was low, Mom could be found down on the mudflats. When the tide was high, she would be standing on the inlet bridge with her plankton net.
    I have great respect for my mother. I learned early that the moon affected the tides. Mom was always waiting for a full or new moon\, when low tide would be lower than average and high tide higher than average. The moon being aligned with Earth and the sun when full or new\, so its gravity combines with the sun’s gravity to create an even stronger gravitational pull. I knew that it took about eight hours for the tides to change from high to low\, sixteen hours for a complete cycle of tides. I didn’t have to wait to learn these things in school. In our house they were everyday knowledge.
    [1] Often, my brother and I\, joined our mother on her adventures into tidal lands. [2] At the very low tides of the full moon\, when almost all the water was sucked away\, we found the hideaways where crabs\, snails\, starfish\, and sea urchins hid in order not to be seen.[3] Sometimes we would dig with shovels in the mud\, where yellow and white worms lived in their leathery tunnels. 13
    For plankton tows\, we would stand on the bridge while Mom lowered a cone-shaped net that is often used by marine biologists.Then we would patiently wait. After a while\, she would pull up the net\, and we would go home. Later\, we would see her sitting at the kitchen table\, peering at a drop of water through the lenses of her microscope from the bottle—watching the thousands of tiny swimming organisms.
    ';
        $article->save();

        $articleID = $article->id;

        $question1 = new \App\Question();
        $question1->question = 'Choose the best answer.
            Individual Question
            ';
        $question1->difficulty_id = 1;//or 2 or 3
        $question1->type_id = 2;//1 for reading and 2 for writing
        $question1->article_id = $articleID;//you only need this line for the reading type

        $question1->save();

        $answer1 = new \App\Answer();
        $answer1->answer = 'NO CHANGE
            ';
        $answer1->is_correct = true; //only if answe is true
        $answer1->question_id = $question1->id; //the question id
        $answer1->save();
        $answer1 = new \App\Answer();
        $answer1->answer = 'waiting, by the back door,
            ';
        $answer1->is_correct = true; //only if answe is true
        $answer1->question_id = $question1->id; //the question id
        $answer1->save();
        $answer1 = new \App\Answer();
        $answer1->answer = 'waiting by the back door,';
        $answer1->is_correct = true; //only if answe is true
        $answer1->question_id = $question1->id; //the question id
        $answer1->save();
        $answer1 = new \App\Answer();
        $answer1->answer = 'waiting by the back door';
        $answer1->is_correct = true; //only if answe is true
        $answer1->question_id = $question1->id; //the question id
        $answer1->save();
        $question2 = new \App\Question();
        $question2->question = 'Choose the best answer.Individual Question';
        $question2->difficulty_id = 1;//or 2 or 3
        $question2->type_id = 2;//1 for reading and 2 for writing
        $question2->article_id = $articleID;//you only need this line for the reading type

        $question2->save();

        $answer2 = new \App\Answer();
        $answer2->answer = '
    		NO CHANGE
             ';
        $answer2->is_correct = false; //only if answe is true
        $answer2->question_id = $question2->id; //the question id
        $answer2->save();
        $answer2 = new \App\Answer();
        $answer2->answer = '
            would sit
            ';
        $answer2->is_correct = true; //only if answe is true
        $answer2->question_id = $question2->id; //the question id
        $answer2->save();
        $answer2 = new \App\Answer();
        $answer2->answer = '
            sat
            ';
        $answer2->is_correct = false; //only if answe is true
        $answer2->question_id = $question2->id; //the question id
        $answer2->save();
        $answer2 = new \App\Answer();
        $answer2->answer = '
            sitting
            ';
        $answer2->is_correct = false; //only if answe is true
        $answer2->question_id = $question2->id; //the question id
        $answer2->save();
        $question3 = new \App\Question();
        $question3->question = '
            Choose the best answer.
            Individual Question
            ';
        $question3->difficulty_id = 1;//or 2 or 3
        $question3->type_id = 2;//1 for reading and 2 for writing
        $question3->article_id = $articleID;//you only need this line for the reading type
        $question3->save();
        $answer3 = new \App\Answer();
        $answer3->answer = '
            NO CHANGE
            ';
        $answer3->is_correct = true; //only if answe is true
        $answer3->question_id = $question3->id; //the question id
        $answer3->save();
        $answer3 = new \App\Answer();
        $answer3->answer = '
            As my mother’s interest is science, she is
            ';
        $answer3->is_correct = true; //only if answe is true
        $answer3->question_id = $question3->id; //the question id
        $answer3->save();
        $answer3 = new \App\Answer();
        $answer3->answer = '
            My mother’s occupation is that of
            ';
        $answer3->is_correct = false; //only if answe is true
        $answer3->question_id = $question3->id; //the question id
        $answer3->save();
        $answer3 = new \App\Answer();
        $answer3->answer = '
            My mother is
            ';
        $answer3->is_correct = false; //only if answe is true
        $answer3->question_id = $question3->id; //the question id
        $answer3->save();
        $question4 = new \App\Question();
        $question4->question = 'Which choice would most effectively introduce the rest of this paragraph?
            Individual Question
            ';
        $question4->difficulty_id = 1;//or 2 or 3
        $question4->type_id = 2;//1 for reading and 2 for writing
        $question4->article_id = $articleID;//you only need this line for the reading type
        $question4->save();
        $answer4 = new \App\Answer();
        $answer4->answer = 'NO CHANGE
            ';
        $answer4->is_correct = false; //only if answe is true
        $answer4->question_id = $question4->id; //the question id
        $answer4->save();
        $answer4 = new \App\Answer();
        $answer4->answer = 'There seemed to be no explanation for why Mom ran our household the way she did.
            ';
        $answer4->is_correct = false; //only if answe is true
        $answer4->question_id = $question4->id; //the question id
        $answer4->save();
        $answer4 = new \App\Answer();
        $answer4->answer = 'Our household didn’t run according to a typical schedule.
            ';
        $answer4->is_correct = true; //only if answe is true
        $answer4->question_id = $question4->id; //the question id
        $answer4->save();
        $answer4 = new \App\Answer();
        $answer4->answer = 'Mom ran our household in a most spectacular manner.
            ';
        $answer4->is_correct = false; //only if answe is true
        $answer4->question_id = $question4->id; //the question id
        $answer4->save();
        $question5 = new \App\Question();
        $question5->question = 'Choose the best answer.
          ';
        $question5->difficulty_id = 1;//or 2 or 3
        $question5->type_id = 2;//1 for reading and 2 for writing
        $question5->article_id = $articleID;//you only need this line for the reading type
        $question5->save();
        $answer5 = new \App\Answer();
        $answer5->answer = 'NO CHANGE
            ';
        $answer5->is_correct = false; //only if answe is true
        $answer5->question_id = $question5->id; //the question id
        $answer5->save();
        $answer5 = new \App\Answer();
        $answer5->answer = 'was defenseless in the face of
            ';
        $answer5->is_correct = false; //only if answe is true
        $answer5->question_id = $question5->id; //the question id
        $answer5->save();
        $answer5 = new \App\Answer();
        $answer5->answer = 'depended on
            ';
        $answer5->is_correct = false; //only if answe is true
        $answer5->question_id = $question5->id; //the question id
        $answer5->save();
        $answer5 = new \App\Answer();
        $answer5->answer = 'trusted in
            ';
        $answer5->is_correct = true; //only if answe is true
        $answer5->question_id = $question5->id; //the question id
        $answer5->save();

    })->describe('seed db with questions and answers');


    Artisan::command('seed-db-9', function () {

        $article = new \App\Article();
        $article->article = 'MY FATHER’S GARDEN

    [1]

        When I was a boy growing up in Delhi\, India\,

    we had a kitchen garden behind our downstairs

    apartment. My father was an avid gardener\, he still is:

    and every Saturday morning he would put on his work

    clothes\, pick up his hoe and trowel\, and would head

    out the back door. 3

    [2]

        As a ten-year-old\, I was supremely unenthusiastic

    about swinging a hoe in the garden when I could be out

    playing with my friends. Having tried and failed\,

    my father was unable to make a gardener of me.

    I had no qualms\, of course\, about enjoying the

    results of his labor: the potatoes\, squash\, cucumbers\,

    and cauliflower that he pursued out of the earth. I would

    even help him dig out the potatoes or cut a cucumber from

    its vine. To me\, it was much more fun to reap than sowing.

    [3]

        Many years later\, living in an upstairs apartment\,

    I am more often sorry I didn’t follow my father out to the

    garden. I have several indoor plants\, but the experience is

    not the same. The few times that I’ve helped a friend with

    yard work has given me the joy of touching the soil

    with an open palm\, to get the earth under my fingernails\,

    of patting down the berm around a newly transplanted

    sapling. Now that I live far from my father (I live in Iowa

    on the other side of the world)\, I wish I’d spend more time

    with him in the garden.

    [4]

    My favorite photograph of my father shows him

    squatting on his heels\, trowel in hand\, behind a golden

    heap of onions freshly pulled from the ground.

    His glowing smile are evidence of his pride in the

    onions—the proof of his labor and love—and in me\, the

    photographer\, his son. In that photo\, his love of the land

    and his love for me are somehow intertwined\, indivisible.

    It is that same love—love of kin\, love of land—that

    pushes under my fingernails\, pushes against my skin\,

    when I thrust my hand into the yielding earth and think

    that on its far side my father might be doing the same
    ';
        $article->save();

        $articleID = $article->id;

        $question1 = new \App\Question();
        $question1->question = 'Choose the best answer.
                Individual Question
                ';
        $question1->difficulty_id = 1;//or 2 or 3
        $question1->type_id = 2;//1 for reading and 2 for writing
        $question1->article_id = $articleID;//you only need this line for the reading type

        $question1->save();

        $answer1 = new \App\Answer();
        $answer1->answer = 'NO CHANGE
                ';
        $answer1->is_correct = true; //only if answe is true
        $answer1->question_id = $question1->id; //the question id
        $answer1->save();
        $answer1 = new \App\Answer();
        $answer1->answer = 'coaxed';
        $answer1->is_correct = true; //only if answe is true
        $answer1->question_id = $question1->id; //the question id
        $answer1->save();
        $answer1 = new \App\Answer();
        $answer1->answer = 'surrendered           ';
        $answer1->is_correct = true; //only if answe is true
        $answer1->question_id = $question1->id; //the question id
        $answer1->save();
        $answer1 = new \App\Answer();
        $answer1->answer = 'enlisted            ';
        $answer1->is_correct = true; //only if answe is true
        $answer1->question_id = $question1->id; //the question id
        $answer1->save();
        $question2 = new \App\Question();
        $question2->question = 'Choose the best answer.
                Individual Question
                ';
        $question2->difficulty_id = 1;//or 2 or 3
        $question2->type_id = 2;//1 for reading and 2 for writing
        $question2->article_id = $articleID;//you only need this line for the reading type

        $question2->save();

        $answer2 = new \App\Answer();
        $answer2->answer = '
                NO CHANGE
                 ';
        $answer2->is_correct = false; //only if answe is true
        $answer2->question_id = $question2->id; //the question id
        $answer2->save();
        $answer2 = new \App\Answer();
        $answer2->answer = '
    the most fun to reap than to sow.            ';
        $answer2->is_correct = true; //only if answe is true
        $answer2->question_id = $question2->id; //the question id
        $answer2->save();
        $answer2 = new \App\Answer();
        $answer2->answer = '
                much more fun to reap than to sow.
                ';
        $answer2->is_correct = false; //only if answe is true
        $answer2->question_id = $question2->id; //the question id
        $answer2->save();
        $answer2 = new \App\Answer();
        $answer2->answer = '
                the most fun reaping than if I’d had to sow.
                ';
        $answer2->is_correct = false; //only if answe is true
        $answer2->question_id = $question2->id; //the question id
        $answer2->save();
        $question3 = new \App\Question();
        $question3->question = '
    The best placement for the underlined portion would be:            Individual Question
                ';
        $question3->difficulty_id = 1;//or 2 or 3
        $question3->type_id = 2;//1 for reading and 2 for writing
        $question3->article_id = $articleID;//you only need this line for the reading type
        $question3->save();
        $answer3 = new \App\Answer();
        $answer3->answer = '
    where it is now.            ';
        $answer3->is_correct = true; //only if answe is true
        $answer3->question_id = $question3->id; //the question id
        $answer3->save();
        $answer3 = new \App\Answer();
        $answer3->answer = '
    after the word sorry.            ';
        $answer3->is_correct = true; //only if answe is true
        $answer3->question_id = $question3->id; //the question id
        $answer3->save();
        $answer3 = new \App\Answer();
        $answer3->answer = '
    after the word follow.            ';
        $answer3->is_correct = false; //only if answe is true
        $answer3->question_id = $question3->id; //the question id
        $answer3->save();
        $answer3 = new \App\Answer();
        $answer3->answer = 'after the word garden (ending the sentence with a period).            ';
        $answer3->is_correct = false; //only if answe is true
        $answer3->question_id = $question3->id; //the question id
        $answer3->save();
        $question4 = new \App\Question();
        $question4->question = 'Choose the best answer.
                Individual Question
                ';
        $question4->difficulty_id = 1;//or 2 or 3
        $question4->type_id = 2;//1 for reading and 2 for writing
        $question4->article_id = $articleID;//you only need this line for the reading type
        $question4->save();
        $answer4 = new \App\Answer();
        $answer4->answer = ' NO CHANGE
                ';
        $answer4->is_correct = false; //only if answe is true
        $answer4->question_id = $question4->id; //the question id
        $answer4->save();
        $answer4 = new \App\Answer();
        $answer4->answer = '
    have given            ';
        $answer4->is_correct = false; //only if answe is true
        $answer4->question_id = $question4->id; //the question id
        $answer4->save();
        $answer4 = new \App\Answer();
        $answer4->answer = '
    has gave            ';
        $answer4->is_correct = true; //only if answe is true
        $answer4->question_id = $question4->id; //the question id
        $answer4->save();
        $answer4 = new \App\Answer();
        $answer4->answer = '
    have gave            ';
        $answer4->is_correct = false; //only if answe is true
        $answer4->question_id = $question4->id; //the question id
        $answer4->save();
        $question5 = new \App\Question();
        $question5->question = 'Choose the best answer.
              ';
        $question5->difficulty_id = 1;//or 2 or 3
        $question5->type_id = 2;//1 for reading and 2 for writing
        $question5->article_id = $articleID;//you only need this line for the reading type
        $question5->save();
        $answer5 = new \App\Answer();
        $answer5->answer = '
                NO CHANGE
                ';
        $answer5->is_correct = false; //only if answe is true
        $answer5->question_id = $question5->id; //the question id
        $answer5->save();
        $answer5 = new \App\Answer();
        $answer5->answer = '
    with getting            ';
        $answer5->is_correct = false; //only if answe is true
        $answer5->question_id = $question5->id; //the question id
        $answer5->save();
        $answer5 = new \App\Answer();
        $answer5->answer = '
    of getting            ';
        $answer5->is_correct = false; //only if answe is true
        $answer5->question_id = $question5->id; //the question id
        $answer5->save();
        $answer5 = new \App\Answer();
        $answer5->answer = '
    got            ';
        $answer5->is_correct = true; //only if answe is true
        $answer5->question_id = $question5->id; //the question id
        $answer5->save();
    })->describe('seed db with questions and answers');


    Artisan::command('seed-db-10', function () {

        $article = new \App\Article();
        $article->article = 'the andean panpipe

        whether its bright and jaunty or haunting and

    melancholic\, the music of the andes highlands has a

    mellow sound unique in the musical world. the

    instrument responsible for this sound is the antara\, or

    andean panpipe\, known for the hollow-sounding,

    breathy notes it creates. the antara has its origins in

    the incan civilization\, once the more richer and more

    powerful empire in south america.

        the antara consists of a connected row of hollow\,

    vertical pipes of varying lengths\, which are then lined up.

    the pipes\, which can vary numerously from three to

    fifteen\, are fashioned from clay that is rolled around

    a mold. each pipe is individually rolled to create the

    proper pitch before being bound to the other pipes.

        the antara dates back to the ninth century.

    evidence about how musicians played the instrument

    have come from painted images on incan ceramic

    pottery. musicians are depicted playing a six-pipe antara

    by holding the lower ends of the two longer pipes

    with the right hand while placing the left hand near the

    remaining tops of the four pipes. the antara was also

    sometimes held in one hand while the other hand beat

    a cylindrical drum.

        [1] due to the limited number of notes that can be

    played on an antara\, early musicians’ most likely worked

    in groups\, coordinating the timing and pitch of their

    instruments to extend the range of sounds produced.

    [2] other pottery images show two antara players facing

    each other while dancing. [3] each player holds a set of

    pipes so that both sets are connected to the other set by

    a string\, as if to suggest that those two antaras should be

    played together. [4] even to this day\, descendants of the

    incas\, the quechua people of peru and bolivia\, prefer

    to play matched antaras bound together.

        unfortunately\, the music of the incas can

    probably never be exactly re-creating. yet one

    can hear in the music of their descendants\, beautiful

    variations on a musical sound that has survived for

    many centuries.
    ';
        $article->save();

        $articleID = $article->id;

        $question1 = new \App\Question();
        $question1->question = ' Choose the best answer.
              Individual Question
              ';
        $question1->difficulty_id = 1;//or 2 or 3
        $question1->type_id = 2;//1 for reading and 2 for writing
        $question1->article_id = $articleID;//you only need this line for the reading type

        $question1->save();

        $answer1 = new \App\Answer();
        $answer1->answer = '
              NO CHANGE
              ';
        $answer1->is_correct = true; //only if answe is true
        $answer1->question_id = $question1->id; //the question id
        $answer1->save();
        $answer1 = new \App\Answer();
        $answer1->answer = '
    they’re          ';
        $answer1->is_correct = true; //only if answe is true
        $answer1->question_id = $question1->id; //the question id
        $answer1->save();
        $answer1 = new \App\Answer();
        $answer1->answer = '
    its
             ';
        $answer1->is_correct = true; //only if answe is true
        $answer1->question_id = $question1->id; //the question id
        $answer1->save();
        $answer1 = new \App\Answer();
        $answer1->answer = '
    its          ';
        $answer1->is_correct = true; //only if answe is true
        $answer1->question_id = $question1->id; //the question id
        $answer1->save();
        $question2 = new \App\Question();
        $question2->question = '
              Choose the best answer.
              Individual Question
              ';
        $question2->difficulty_id = 1;//or 2 or 3
        $question2->type_id = 2;//1 for reading and 2 for writing
        $question2->article_id = $articleID;//you only need this line for the reading type

        $question2->save();

        $answer2 = new \App\Answer();
        $answer2->answer = '
              NO CHANGE
               ';
        $answer2->is_correct = false; //only if answe is true
        $answer2->question_id = $question2->id; //the question id
        $answer2->save();
        $answer2 = new \App\Answer();
        $answer2->answer = '
    one of the richest and most          ';
        $answer2->is_correct = true; //only if answe is true
        $answer2->question_id = $question2->id; //the question id
        $answer2->save();
        $answer2 = new \App\Answer();
        $answer2->answer = '
              the richest and most
              ';
        $answer2->is_correct = false; //only if answe is true
        $answer2->question_id = $question2->id; //the question id
        $answer2->save();
        $answer2 = new \App\Answer();
        $answer2->answer = '
    the richer and more          ';
        $answer2->is_correct = false; //only if answe is true
        $answer2->question_id = $question2->id; //the question id
        $answer2->save();
        $question3 = new \App\Question();
        $question3->question = '
    Given that all of the choices are true, which one provides the most significant new information?
              Individual Question
              ';
        $question3->difficulty_id = 1;//or 2 or 3
        $question3->type_id = 2;//1 for reading and 2 for writing
        $question3->article_id = $articleID;//you only need this line for the reading type
        $question3->save();
        $answer3 = new \App\Answer();
        $answer3->answer = '
              NO CHANGE
              ';
        $answer3->is_correct = true; //only if answe is true
        $answer3->question_id = $question3->id; //the question id
        $answer3->save();
        $answer3 = new \App\Answer();
        $answer3->answer = '
    thus forming this musical instrument.          ';
        $answer3->is_correct = true; //only if answe is true
        $answer3->question_id = $question3->id; //the question id
        $answer3->save();
        $answer3 = new \App\Answer();
        $answer3->answer = '
    arranged from shortest to longest.          ';
        $answer3->is_correct = false; //only if answe is true
        $answer3->question_id = $question3->id; //the question id
        $answer3->save();
        $answer3 = new \App\Answer();
        $answer3->answer = '
    which are fastened together.          ';
        $answer3->is_correct = false; //only if answe is true
        $answer3->question_id = $question3->id; //the question id
        $answer3->save();
        $question4 = new \App\Question();
        $question4->question = 'Choose the best answer.Individual Question';
        $question4->difficulty_id = 1;//or 2 or 3
        $question4->type_id = 2;//1 for reading and 2 for writing
        $question4->article_id = $articleID;//you only need this line for the reading type
        $question4->save();
        $answer4 = new \App\Answer();
        $answer4->answer = 'A.
              NO CHANGE
              ';
        $answer4->is_correct = false; //only if answe is true
        $answer4->question_id = $question4->id; //the question id
        $answer3->save();
        $answer4 = new \App\Answer();
        $answer4->answer = '
    in quantity of numbers          ';
        $answer4->is_correct = false; //only if answe is true
        $answer4->question_id = $question4->id; //the question id
        $answer4->save();
        $answer4 = new \App\Answer();
        $answer4->answer = '
    number-wise          ';
        $answer4->is_correct = true; //only if answe is true
        $answer4->question_id = $question4->id; //the question id
        $answer4->save();
        $answer4 = new \App\Answer();
        $answer4->answer = '
    in number          ';
        $answer4->is_correct = false; //only if answe is true
        $answer4->question_id = $question4->id; //the question id
        $answer4->save();
        $question5 = new \App\Question();
        $question5->question = '
              Choose the best answer.
              Individual Question
            ';
        $question5->difficulty_id = 1;//or 2 or 3
        $question5->type_id = 2;//1 for reading and 2 for writing
        $question5->article_id = $articleID;//you only need this line for the reading type
        $question5->save();
        $answer5 = new \App\Answer();
        $answer5->answer = '
              NO CHANGE
              ';
        $answer5->is_correct = false; //only if answe is true
        $answer5->question_id = $question5->id; //the question id
        $answer5->save();
        $answer5 = new \App\Answer();
        $answer5->answer = '
    being binded          ';
        $answer5->is_correct = false; //only if answe is true
        $answer5->question_id = $question5->id; //the question id
        $answer5->save();
        $answer5 = new \App\Answer();
        $answer5->answer = '
    been bounded          ';
        $answer5->is_correct = false; //only if answe is true
        $answer5->question_id = $question5->id; //the question id
        $answer5->save();
        $answer5 = new \App\Answer();
        $answer5->answer = '
    been bound          ';
        $answer5->is_correct = true; //only if answe is true
        $answer5->question_id = $question5->id; //the question id
        $answer5->save();
    })->describe('seed db with questions and answers');
