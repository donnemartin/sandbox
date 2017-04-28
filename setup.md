# Setup

## Hack

HHVM is a virtual machine that runs programs written in Hack and PHP:

    $ brew tap hhvm/hhvm
    $ brew install hhvm

## Nuclide

Nuclide is an Atom package to run Hack projects:

    $ brew cask install atom

### Install Nuclide

Under `Atom -> Preferences -> Settings -> Install Packages`, search for and install `Nuclide`.

### Install Nuclide packages

Under `Packages -> Settings View -> Manage Packages -> Settings` enable `Install Recommended Packages on Startup`, then restart Atom.

#### Watchman

Nuclide uses Watchman to detect file and folder changes:

    $ brew update
    $ brew install watchman

### Nuclide shortcuts

* Format code: `Cmd+Shift+C`
* Debugger: `Cmd+Shift+A`

## Create a sample PHP file

Create a `HelloWorld.php` file with the following contents:

```
<?hh
echo "Hello World!";
```

## Set up the type checker

The type checker `hh_client` looks for the file `.hhconfig` as the root of your repo:

    $ touch .hhconfig

Check for errors:

    $ hh_client
