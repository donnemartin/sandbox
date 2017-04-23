# Mercurial

Create repo:

    $ mkdir project
    $ hg init project

Clone repo:

    $ hg clone project-repo project-local

See revision currently checked out:

    $ hg summary

View summary of every 'commit' (called a changeset in Mercurial):

    $ hg log [-v]

See what changes are going into the commit:

    $ hg status

See the actual changes:

    $ hg diff

Discard changes:

    $ hg revert foo.txt

Commit the changes:

    $ hg commit
