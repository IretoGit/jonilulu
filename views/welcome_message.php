<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Git Guide</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 3px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to Git Guide!</h1>

	<div id="body">

                <h2>Configuring Git</h2>
		

		<p>There are several configurations available</p>
		<code>git config --global user.name "Your name"</code>
                <code>git config --global user.email "Your email"</code>
                <code>git config --global core.editor "nano"</code>

                <p>The following makes git have a colored output</p>

                <code>git config --global color.ui true</code>

		<p>To see the configurations</p>
		<code>git config --list</code>

		<p>They are in a .gitconfig file. You can see it by typing</p>

                <code>cat .gitconfig</code>

                <h2>Git Help</h2>

                <pre>

               The most commonly used git commands are:
   add        Add file contents to the index
   bisect     Find by binary search the change that introduced a bug
   branch     List, create, or delete branches
   checkout   Checkout a branch or paths to the working tree
   clone      Clone a repository into a new directory
   commit     Record changes to the repository
   diff       Show changes between commits, commit and working tree, etc
   fetch      Download objects and refs from another repository
   grep       Print lines matching a pattern
   init       Create an empty git repository or reinitialize an existing one
   log        Show commit logs
   merge      Join two or more development histories together
   mv         Move or rename a file, a directory, or a symlink
   pull       Fetch from and merge with another repository or a local branch
   push       Update remote refs along with associated objects
   rebase     Forward-port local commits to the updated upstream head
   reset      Reset current HEAD to the specified state
   rm         Remove files from the working tree and from the index
   show       Show various types of objects
   status     Show the working tree status
   tag        Create, list, delete or verify a tag object signed with GPG

                </pre>


           <h2>Initializing a repository</h2>

           <p>Tells git to track a repository</p>
           
           <p>Move into the file you want to track via the command line</p>

           <code>git init</code>
            
           <p>This produces</p>

           <code>Initialized empty Git repository in /var/www/git/application/.git/
</code>
           <p>Note it produces a .git directory. This where it stores all the git tracking information.
           	There is only one per project. There is only ever one such file produced per project. Removing
           	this will not the tracking for the whole system. this is a contrast to svn systems where every directory
           	has a .svn file in it to track them. Thus removing the tracking is alot easier for a git based system than svn. </p>
           	<p>Opening up this produces the git workspace. The .git file is not normally edited </p>
           
           <pre>
           total 40
drwxr-xr-x  7 ireto ireto 4096 2012-11-04 11:29 .
drwxr-xr-x 16 ireto ireto 4096 2012-11-04 11:29 ..
drwxr-xr-x  2 ireto ireto 4096 2012-11-04 11:29 branches
-rw-r--r--  1 ireto ireto   92 2012-11-04 11:29 config
-rw-r--r--  1 ireto ireto   73 2012-11-04 11:29 description
-rw-r--r--  1 ireto ireto   23 2012-11-04 11:29 HEAD
drwxr-xr-x  2 ireto ireto 4096 2012-11-04 11:29 hooks
drwxr-xr-x  2 ireto ireto 4096 2012-11-04 11:29 info
drwxr-xr-x  4 ireto ireto 4096 2012-11-04 11:29 objects
drwxr-xr-x  4 ireto ireto 4096 2012-11-04 11:29 refs

           </pre>

           <h2>Commiting</h2>

           <p>The most important instruction. Tell git to add every change to the directory. Then
           	commit all the changes to git</p>

           <code>git add .</code>
           <code>git commit -m "Initial commit"</code>
           <p>The "-m" means the commit has a message attached to it.</p>

           <P>This produces the following output, detailing the operation</P>

           <pre>
           ireto@ubuntu:/var/www/git/application$ git add .
ireto@ubuntu:/var/www/git/application$ git commit -m "initial commit"
[master (root-commit) 060482b] initial commit
 35 files changed, 1676 insertions(+), 0 deletions(-)
 create mode 100644 .htaccess
 create mode 100644 cache/.htaccess

           </pre>

           <p>The basic process is as follows:</p>

           <ol>
           	<li>Make changes</li>
           	<li>Add the changes</li>
           	<li>Commit the changes to the repository with a message</li>
           </ol>

           <p>The commit messages need to be descriptive. This is a best practice.</p>

           <p>The commit log can be seen by</p>
           <code>git log</code>
           <p>This produces an out put like:</p>
           <pre>git log
commit 060482bffd4f277900cca8b155376665b82c01fa
Author: Iret <apcb34@dsl.pipex.com>
Date:   Sun Nov 4 12:12:54 2012 +0000

    initial commit
</pre>

      <p>You can limit number of commits to show</p>
      <code>git log -n 3</code>

      <p>You can limit the time frame of commits</p>
      <code>git log --since=2012-06-14</code>

      <p>You just select an author</p>
      <code>git log --author="Kevin"</code>

      <p>You just select a commit message containing a particular word by using a grep statement</p>
      <code>git log --grep="Init"</code>




<h2>The git add command adds to the staging index from the working copy</h2>

<h2>The git commit command adds to the repository from the staging index</h2>


<p>When adding the "." means adds all file in the directory. You can just add a single file using 
  git add single_file.txt.</p>


  <p>Each commit has a number that is associated with it. An ID number. It is a checksum for each change set. It 
  	is a hash algorithm called a SHA value. It is 40 characters long.</p>

<h2>HEAD</h2>

<ul>
<li>pointer to the tip of current branch in repository</li>
<li>last state of repository , what was last checked out</li>
<li>points to parent of next commit</li>
<li>place where recording next takes places</li>

</ul>


<h2>git status</h2>
<p>This reports the difference between the working copy, staging index and the repository.</p>
<p>With nothing to commit, ie with the three directories the same.</p>
<p>With a change to working directory, the output is:</p>
<pre> git status
# On branch master
# Changed but not updated:
#   (use "git add <file>..." to update what will be committed)
#   (use "git checkout -- <file>..." to discard changes in working directory)
#
#	modified:   views/welcome_message.php
#
no changes added to commit (use "git add" and/or "git commit -a")
</pre>

<p>The output implies that there are things in the working 
	directory which are not being tracked.</p>
	<p>These can be added to the staging index using the "add" command</p>
	<p>When this is done, the git status command produces and output as shown below, which
		implies that there is data to be shifted from the staging index to the repository using 
		the commit command.</p>

<pre> git status
# On branch master
# Changes to be committed:
#   (use "git reset HEAD <file>..." to unstage)
#
#	modified:   views/welcome_message.php
</pre>
<p>If there are both data to shift from both staging index and working directory, the git 
status output is:</p>
<pre>git status
# On branch master
# Changes to be committed:
#   (use "git reset HEAD <file>..." to unstage)
#
#	modified:   views/welcome_message.php
#
# Changed but not updated:
#   (use "git add <file>..." to update what will be committed)
#   (use "git checkout -- <file>..." to discard changes in working directory)
#
#	modified:   views/welcome_message.php
</pre>



<h2>Viewing differences between files</h2>
<p>The command git diff shows differences between repository and working version</p>
<code>git diff</code>
<pre> git diff
diff --git a/views/welcome_message.php b/views/welcome_message.php
index 71591dd..6d0be9c 100644
--- a/views/welcome_message.php
+++ b/views/welcome_message.php
@@ -280,7 +280,7 @@ status output is:</p>
 
 
 
-
+<h2>Viewing differences between files</h2>
 
</pre>

<p>git diff shows things which are unique about the working directory</p>

<p>To show changes against the staging server use:</p>

<code>git diff --staged</code>

<h2>Deleting tracked files</h2>

<p>This refers to files which are already in the repository</p>

<code>git rm f1.txt f2.txt</code>

<p>This produces an out put </p>

<pre>rm 'views/f1.txt'
rm 'views/f2.txt'
</pre>

<p>This produces an out put of:</p>
<pre> On branch master
# Changes to be committed:
#   (use "git reset HEAD <file>..." to unstage)
#
#	deleted:    f1.txt
#	deleted:    f2.txt
</pre>

<p>Commiting this will remove the files from the repository. The output is below</p>
<pre>[master f049bad] to remove the files
 0 files changed, 0 insertions(+), 0 deletions(-)
 delete mode 100644 views/f1.txt
 delete mode 100644 views/f2.txt
</pre>

<h2>Moving and renaming files</h2>
<p>There are two ways to acheive this</p>
<ol>
<li>Let the operating system do it, then tell git about the changes.</li>
<li>Let git do the whole thing.</li>
</ol>

<p>In git a rename and move are the same thing</p>

<code>git mv f1.txt f2.txt
</code>
<pre># On branch master
# Changes to be committed:
#   (use "git reset HEAD <file>..." to unstage)
#
#	renamed:    f1.txt -> f2.txt
</pre>

<h2>Undoing changes to working directory</h2>

<p>This is acheived by using the git checkout command</p>

<p>Make sure as a safety precaution to use the -- command, to stay on the current branch</p>

<pre>git checkout -- "current file name"</pre>


<h2>ammending commits</h2>
<p>The most recent commitvalue is the only one which can be edited.</p>
<p>It is possible to edit the change or data commited</p>
<p>The message associated with the commit can be changed</p>
<p>The SHAH number cannot change</p>

<code>git edit --amend -m "message for amend"</code>


<h2>Retrieving old versions</h2>

<p>It is possible to revert to an old commit.</p>
<p>Just grab an old shah number</p>
<p>using this, the code is</p>

<code>git reverse "shah number"</code>

<h2>How to move the head pointer</h2>

<p>git reset</p>
<p>There are three options:</p>

<ul>
<li>--soft:  does not change staging index or working directory</li>
<li>--hard: changes staging index and working directory to match repository</li>
<li>--mixed: (default) changes staging index to match repository, does not change working directory</li>
</ul>



<h2>To show where head points to:</h2>
<code>cat .git/HEAD</code>

<p>Code to do a soft reset</p>
<p>This only changes the repo. Staging and working are left alone</p>
<p>git status will show a difference between staging and repo. Commiting this will revert repo head change.</p>

<code>git reset --soft 42419cede59712a6ad75731548e337a45ebd25c2
</code>

<p>Code to do a mixed reset</p>
<p>This makes what is in the staging index the same as the repository. Leaves the working directory alone.</p>

<code>git reset --mixed 42419cede59712a6ad75731548e337a45ebd25c2
</code>

<p>Code to do a hard reset</p>
<p>This makes repository, staging index and working copy point to the same thing. This is a very powerful command.</p>

<code>git reset --hard 42419cede59712a6ad75731548e337a45ebd25c2
</code>

<h2>How to remove unwanted files from working directory</h2>

<p>Just use the git clean command. it will permanently delete them</p>

<p>To check what will be removed</p>
<code>git clean -n</code>

<p>to do a hard remove</p>
<code>git clean -f</code>

<h2>Ignoring files</h2>
<p>There are times when files in a git repository need to be ignored</p>
<p>An example is a log file which constantly changes</p>
<p>If this problem is not dealt with, a user will be constantly bombarded with
requests for commits.</p>
<p>Files to ignore are detailed in a special file called a .gitignore file. It is put in the root directory of the project</p>
<p>The files to ignore can be a list of files or regular expressions.</p>
<p>The .gitignore file must be commited to the project.</p>
<p>Example of a .gitignore file.</p>

<pre>
	#comment
tempfile.txt
.DS_STORE
*.zip
*.gz
log/*.log
log/*.log.[0-9]
assets/photoshop/
assesets/videos/
!assets/videos/tour_*.mp4

</pre>

<p>There is a git repository for .ignorefiles containing suggested .gitignore files
for various situations or languages</p>
<p>https://github.com/github/gitignore</p>

<h2>Ignoring tracked file</h2>
<p>Sometimes you need to ignore </p>
<p>You must remove it from the staging index and alter the .gitignore file</p>
<p>Using this method it physically will remain. It is just not tracked.</p>
<code> git rm --cached "name of file to stop tracking"</code>


<h2>Tracking empty files</h2>
<p>Git is designed to track files. Not directories. It ignores empty directories.</p>
<p>To track an empty file , put something in it.</p>

<h2>The commit tree</h2>

<p>You can reference a commit by the full SHAH or a shortened SHAHs</p>
<p>A commit can be referenced by a HEAD pointer or branch reference</p>
<p>Commits can be referenced by its ancestory</p>

<p>for parent commit</p>

<ul>
<li>HEAD^,  acgfr^, master^</li>
<li>HEAD~1, HEAD~</li>


</ul>

<p>for grand parent commit</p>

<ul>
<li>HEAD^^,  acgfr^^, master^^</li>
<li>HEAD~2, </li>

</ul>

<p>for great grand parent commit</p>

<ul>
<li>HEAD^^^,  acgfr^^^, master^^^</li>
<li>HEAD~3, </li>

</ul>

<p>To print out what is in a tree</p>
<code>git ls-tree HEAD</code>

<pre>:/var/www/git/application$ git ls-tree HEAD^^^
100644 blob 14249c50bd7605225950b2d372f352a2dba9252a	.htaccess
040000 tree c9170f1e5ab6f85309907001f6e0b4672e780017	cache
040000 tree e7e8f649e9ed9b8be75b31131434146c646b7154	config
040000 tree ce7ff2dd4cfe2bb104429be993e4d65334d8466c	controllers
040000 tree 5882a80309f3ec42d046f57ff91f96211414cc71	core
040000 tree 5284f121d87b598f8308d88090f7dc28371ee23d	errors
100644 blob e69de29bb2d1d6434b8b29ae775ad8c2e48c5391	f2.txt
040000 tree 5882a80309f3ec42d046f57ff91f96211414cc71	helpers
040000 tree 5882a80309f3ec42d046f57ff91f96211414cc71	hooks
100644 blob c942a79ce6ad0d5cf6bd0b390844cb5e55358f15	index.html
040000 tree 26679ca51bfc356fccfdbcff8a68983d9ed63ba6	language
040000 tree 5882a80309f3ec42d046f57ff91f96211414cc71	libraries
040000 tree 5882a80309f3ec42d046f57ff91f96211414cc71	logs
040000 tree 5882a80309f3ec42d046f57ff91f96211414cc71	models
040000 tree 5882a80309f3ec42d046f57ff91f96211414cc71	third_party
040000 tree 208397d7be49e7ce78cc0c586ecadeaecd61a632	views
</pre>


<h2>Options for git log</h2>

<p>to get a one line listing of log file</p>
<code>git log --oneline</code>
<pre>bea0891 edit 19 wanted
42419ce more text edits 11
6c25cfd Revert "more text edits 10"
6151fae Revert "more text edits 6"
c422042 more text edits 10
fbe2727 Revert "more text edits 8"
ce99d39 more text edits 9
b94e0bc more text edits 8
ee10c5a more text edits 7
7b8c1b5 more text edits 6
</pre>

<p>To show just 3 commits</p>
<code>git log --oneline -3</code>

<pre>git log --oneline -3
bea0891 edit 19 wanted
42419ce more text edits 11
6c25cfd Revert "more text edits 10"
</pre>
<p>You can also serach by author and time.In addition grep can be used</p>

<p>To show contents of a commit. All details of the commit are shown</p>
<code>git show "SHA"</code>

<h2>Comparing commits</h2>

<p>To compare between two different commits</p>

<code>git diff b39abf2..42419ce
</code>

<p>To get a statistical summary</p>
<code> git diff --stat --summary 4764t..HEAD</code>

<p>To ignore white space, use -b option,  -w ignores all spaces</p>

<code> git diff -b 4764t..HEAD</code>


<h2>Branching</h2>

<p>A very powerful feature in Git. Easy to make and manage</p>

<p>To form a new branch</p>
<code>git branch new_feature</code>
<p>To form show all branches:</p>
<code>git branch</code>
<pre> git branch
* master
  new_feature
</pre>

<p>To show this in configs</p>
<pre> ls -la .git/refs/heads
total 16
drwxr-xr-x 2 ireto ireto 4096 2012-11-06 15:11 .
drwxr-xr-x 4 ireto ireto 4096 2012-11-04 11:29 ..
-rw-r--r-- 1 ireto ireto   41 2012-11-06 13:25 master
-rw-r--r-- 1 ireto ireto   41 2012-11-06 15:11 new_feature
</pre>

<p>To switch branch, check it out</p>

<code>git checkout new_feature</code>
<pre> git checkout new_feature
M	views/welcome_message.php
Switched to branch 'new_feature'
</pre>
<pre>git branch
  master
* new_feature
</pre>

<p>To create and switch branches at the same time, use -b option. It means create and switch at the same time </p>
<code>git checkout -b second_new_feature</code>
<pre>git checkout -b second_new_feature
M	views/welcome_message.php
Switched to a new branch 'second_new_feature'
</pre>

<p>To compare branches</p>
<code>git diff master..new_feature</code>



<p> To find out if current branch completely encompasses another branch. It will list all branches which can be contained in the current branch.</p>

<code>git branch --merged</code>
  
 <p>To rename a branch, it must be renamed</p>  

 <code>git -m "old title"  "new title"</code>            

	</div>


<p>To delete a branch</p>
<code>git branch -d branch_name</code>
<p>Or</p>
<code>git branch --delete branch_name</code>
<p>You cannot delete the current branch, you have to be in another branch</p>
<p>If you try to delete a branch that has stuff that the current branch does not,a warning will appear and you will be asked to delete is a "-D" not "-d"</p>



<p>To merge a branch with another. First get into the branch you want to recive the changes.</p>
<p>Then do the merge control, but make sure it is a clean version. that is nothing to commit</p>
<code>git merge "branch with changes to join current branch"</code>
<pre>git merge new
Updating 0e990d8..221e3a3
Fast-forward
 views/welcome_message.php |   18 ++++++++++++++----
</pre>
<p>Resolving merge conflicts</p>
<p>There are three ways</p>

<ol>
<li>Abort the merge</li>
<li>Resolve conflicts manually</li>
<li>Use a merge tool</li>
</ol>

<p>To abort the merge. This returns things to before the merge was attempted.</p>
<code>git merge --abort</code>
               
<p>To resolve manually the conflicting section will have \"<<<<<<\" or "====="</p>
	
<p>The steps are</p>
<ol>
<li>Open the files with a conflict</li>
<li>Find spot with a problem and manually fix it. Do this for all files with a conflict</li>
<li>Then add all fixed files to the staging index and commit them to complete the merge.</li>
</ol>

<p>use the following to show the merge process</p>

<code>git log --graph --oneline --all --decorate</code>

<p>To use a tool</p>
<code>git mergetool --tool="name of merge tool"</code>

<p>To show available merge tools:</p>

<pre> git mergetool
merge tool candidates: meld opendiff kdiff3 tkdiff xxdiff tortoisemerge gvimdiff diffuse ecmerge p4merge araxis emerge vimdiff
No files need merging
</pre>

<p>Strategies for reducing conflicts</p>
<ul>
<li>keep lines short</li>
<li>keep commits small and focused</li>
<li>beware of stray edits to whitespace</li>
<li>merge often making conflicts smaller</li>
<li>track changes to master so the branch does not get too distant from master branch</li>
</ul>

</div>

<h2>Stashing changes</h2>
<p>A stash is a place to store tempoary changes. You can store thigs here to use later.</p>
<p>It is not part of the repository staging index or working area.</p>
<p>They are not commits and do not have a SHA associated with them</p>

<p>Often used when you wish to change branches but you are not ready to commit the changes. You put the changes in a stash.</p>

<p>To save a change to stash</p>
<code>git stash save "the change to stash"</code>

<pre>git stash save "stash test2"
Saved working directory and index state On master: stash test2
HEAD is now at 3b4035a text about stash
</pre>

<pre>After a stash save a reset HARD HEAD is performed. That is the repository is put into staging index and working copy.</pre>

<p>To see a list of stashes</p>

<pre>git stash list
stash@{0}: On master: stash test2
stash@{1}: On master: stash test
</pre>
<p>To see changes to an individual stash</p>

<code>git stash show stash@{0}</code>

<pre> git stash show stash@{0}
 views/welcome_message.php |    6 +++++-
 1 files changed, 5 insertions(+), 1 deletions(-)
</pre>

<p>The -p option will show a diff patch, giving more details to teh changes.</p>


<p>To get back a stash there are two options</p>

<code>git stash pop stash@{0}
</code>
<p>The above will apply the change to the working directory and remove the stash from the stash list</p>

<code>git stash apply stash@{0}
</code>
<p>The above will apply the change to the working directory but not remove it from the stash list</p>



</body>
</html>
