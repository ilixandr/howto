# Github howto

add new file(s)
--
`git add <filename>` or `git add .`

commit changes
--
`git commit -m <message>` or `git commit -am <message>`

push modified file(s)
--
`git push` or `git push origin master` (in case it is the very first push)

check if local storage is up-to-date with github
--
`git pull`

sync deleted files
--
rm on local computer, `git rm <filename>`, then `git commit` and `git push`

create a new repository on the command line
--
`echo "# a title" >> README.md`

`git init`

`git add README.md`

`git commit -m "first commit"`

`git remote add origin https://github.com/<username>/<projectname>.git`

`git push -u origin master`
