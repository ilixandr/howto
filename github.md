# Github howto
1. add new file(s)
--
`git add <filename>` or `git add .`

2. commit changes
--
`git commit -m <message>` or `git commit -am <message>`

3. push modified file(s)
--
`git push` or `git push origin master` (in case it is the very first push)

4. check if local storage is up-to-date with github
--
`git pull`

5. sync deleted files
--
rm on local computer, `git rm <filename>`, then `git commit` and `git push`

6. create a new repository on the command line
--
`echo "# a title" >> README.md`

`git init`

`git add README.md`

`git commit -m "first commit"`

`git remote add origin https://github.com/<username>/<projectname>.git`

`git push -u origin master`
