#Code2Hire Weekly Challenges
These are the weekly challenges expected to be completed by each student.

##How to use this repo
The following instructions cover how to work with this repo in Cloud 9.

###Setup project in Cloud 9 (only needs to be done once)
1. Fork this repo by clicking fork on the top right hand corner of this page.
2. Open [Cloud 9](https://www.c9.io) and login with your GitHub account by clicking the icon that looks like a cat in the top right hand corner of the page
3. Select repository from the left side navigation
4. Choose clone to edit on the challenges repo
5. Enter the workspace name **challenges** and choose the **PHP** template
6. Open your new workspace and open a terminal window
7. Run `git remote add completed-work https://github.com/Code2Hire/challenges-student-work.git`
8. Run `git remote add new-challenges git@github.com:Code2Hire/challenges.git`
9. Create a working branch by running `git checkout -b username` (username should be first initial and last name e.g. eschwartz)

###Instructions on how to work with repo day-to-day
This instructions below cover how to work with this repo including how to pull in new challenges, save your work, and submit your completed work

**When coding always make sure you are on your working branch**

####Pulling in new challenges####
1. Make sure you are on the master branch by typing `git checkout master` from the terminal in Cloud 9
2. Run `git fetch new-challenges` to pull down the updated challenges
3. Run `git merge new-challenges/master` to merge the updated challenges into the repo associated with Cloud 9
4. Checkout your working branch by running `git checkout username` (username should be first initial and last name e.g. eschwartz)
5. Merge the new challenges into your working branch by running `git merge master`

####Working with and saving challenges####
**When coding always make sure you are on your working branch**

1. Make sure your working branch is checked out by running `git checkout username` (username should be first initial and last name e.g. eschwartz)
2. To save the work you have done run `git add .` to add the files you have modified to your branch
3. Commit your work by running `git commit -m “comment about work just completed”`

####Submit your completed challenges####
**When submitting your challenges always make sure you are on your working branch**

1. Make sure your work is saved by following the instructions outline in the above **Working with and saving challenges** section
2. Run `git push completed-work`
3. You will be prompted for your GitHub username, enter it and hit enter
4. You will be promted for your GitHub password, enter it and hit enter

####OPTIONAL: Update your GitHub repository with your completed work####
1. Run `git checkout master` to checkout the master branch
2. Merge your working branch into the master branch using `git merge username` (username should be first initial and last name e.g. eschwartz)
3. Run `git push` to push your work up to your repo on GitHub