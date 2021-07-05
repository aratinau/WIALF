# Git

## stash les non traqués avec un message

`git stash save --include-untracked --message "content message"`

## show le contenu du stash

`git stash show -p`

## undo last commit

`git reset --soft HEAD~1`

## undo the undo last commit 

`git reset 'HEAD@{1}'`

## ignore le tracking 

`git update-index --assume-unchanged .env`

## undo ignore le tracking 

`git update-index --no-assume-unchanged .env`

## voir le contenu d'un stash 

`git stash show -p stash@{0}`

## you want your own independent version of the file or folder. For instance, you don't want to overwrite (or delete) production/staging config files

`git update-index --skip-worktree <path-name>`

## pour le undo du skip worktree

`git update-index --no-skip-worktree <path-name>`

## difference d'un fichier entre deux branches

`git diff mybranch master -- file.ext`

## toutes les remotes branch

```
git branch -r | grep -v '\->' | while read remote; do git branch --track "${remote#origin/}" "$remote"; done
git fetch --all
git pull --all
```
