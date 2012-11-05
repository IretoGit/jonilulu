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


<code>git edit --amend -m "message for amend"</code>

<h2>Retrieving old versions</h2>

<p>It is possible to revert to an old commit.</p>
<p>Just grab an old shah number</p>
<p>using this, the code is</p>

               
	</div>









               

	
</div>


</body>
</html>
