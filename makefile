setup:
	make .wp
test:
	git push upstream release/$v
release:
	git commit -m ":memo: $v changelog"
	git checkout main
	git merge --no-ff release/$v -m ":bookmark: $v"
	git tag -a $v -m "Release $v"
	git checkout develop
	git merge --no-ff release/$v -m ":bookmark: merge $v to develop"
	git push origin develop
	git push upstream main
	git push upstream $v
	git branch -d release/$v
	# git push upstream --delete release/$v