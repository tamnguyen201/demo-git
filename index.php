hello
List basic command git for beginer:

1) git config
    - Config account git
    - Syntax
        + git config -- global user.name = “your name” 
        + git config -- global user.email = “your_email”

2) git init
    - Initializea new repository
    - Syntax: git init

3) git clone
    - Clone a remote repository
    - Syntax
        + git clone <repository_url>

4) git status
    - Check the status of the local repository when modifined
    - Syntax: git status

5) git add
    - Add new, update content, the file has changed
    - Syntax
        + git add file_name  (add file_name)
        + git add . (add new all changed content)

6) git commit
    - Commit with message
    - Syntax: git commit -m "message for commit"

7) git log 
    - View list commits created
    - Syntax
        + git log (view all commits)
        + git log -n (view n commits with n equals the number_commit want to see, ex: git log -5)

8) git diff
    - See the changes before committing
    - Syntax: git diff

9) git branch
    - View list or add new branch
    - Syntax
        + git branch (view list branch)
        + git branch <branch_name> (add new branch)
        + git branch -b <branch_name> (Create a new branch and switch to that branch)

10) git checkout
    - Switch to another branch
    - Syntax 
        + git checkout <branch_name> (Switch to branch_name branch)

11) merge branch
    - Syntax
        + git merge <other_branch>        

12) git remove branch
    - Delete branch
    - Syntax 
        + git branch -D branch_name (only locally)
        + git push remote_name branch_name --delete (only remote repository)
        
13) git pull/push
    - Pull/push content between local and remote repository
    - Syntax
        + git pull (pull content from remote to local repository)
        + git push <remote_name> <branch_name> (push content from local to remote repository, always pull the content before push something)

14) git remote
    - Syntax
        + git remote -v (view list remote on local)
        + git remote add <remote_name> <remote_url> (add a new remote)
        + git remote set-url <remote_name> <remote_url> (change url remote)
        + git remote rename <old_name> <new_name> (rename remote)
        + git remote remove <remote_name> (remove <remote_name>)