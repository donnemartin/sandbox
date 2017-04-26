# Mercurial

Create repo:

    $ mkdir project
    $ hg init project

Clone repo:

    $ hg clone project-repo project-local

See revision currently checked out:

    $ hg summary

View summary of every 'commit' (called a changeset in Hg):

    $ hg log [-v]

See what changes are going into the commit:

    $ hg status

See the actual changes:

    $ hg diff

Discard changes:

    $ hg revert foo.txt

Commit the changes:

    $ hg commit

Push the changes to the remote repository:

    $ hg push

Pull all changes in remote repository not yet in the local working directory:

    $ hg pull

Update the working directory with the newly pulled contents:

    $ hg update

Merge changes:

    $ hg merge

Let Hg know we resolved a conflict:

    $ hg resolve

List available bookmarks:

    $ hg bookmarks

Create a bookmark:

    $ hg bookmarks my-feature

Switch to a bookmark:

    $ hg bookmarks my-other-feature

Delete a bookmark

    $ hg bookmark completed-feature

## Cheat sheets

* [Reference 1](https://www.mercurial-scm.org/wiki/QuickReferenceCardsAndCheatSheets?action=AttachFile&do=view&target=Mercurial-Usage-v1.0bz-300dpi-color.png)
* [Reference 2](https://www.mercurial-scm.org/wiki/QuickReferenceCardsAndCheatSheets?action=AttachFile&do=view&target=Mercurial-Cheatsheet-Adrian-v1.0.svg)
* [Reference 3](https://www.cheatography.com/codeshane/cheat-sheets/mercurial-hg/)
