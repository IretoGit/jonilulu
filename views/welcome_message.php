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

           <P>The most important instruction. Tell git to add every change to the directory. then
           	commit all teh changes to git</P>

           <code>git add .</code>
           <code>git commit -m "Initial commit"</code>


               
	</div>

               

	
</div>

</body>
</html>
