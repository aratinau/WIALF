# Git

## stash les non traqués avec un message

`git stash save --include-untracked --message "content message"`

## show le contenu du stash

`git stash show -p`

## undo last commit

`git reset --soft HEAD~1`

## ignore le tracking 

`git update-index --assume-unchanged .env`

## undo ignore le tracking 

`git update-index --no-assume-unchanged .env`

## voir le contenu d'un stash 

`git stash show -p stash@{0}`
