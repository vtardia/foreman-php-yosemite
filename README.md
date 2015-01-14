Foreman PHP Yosemite
=====================

A sample Foreman setup that works on OSX Yosemite with the default Apache (v2.4.9) and PHP (5.5.14).

It includes:

 - a web process inside the `web/` directory,
 - a worker process inside the `bin/` directory,
 - utility scripts for Foreman in the `dev/` directory.

## How to use

Insert your enviroment variables into `.env`. Then run:

    $ foreman start -f Procfile-dev

The file `Procfile-dev` uses the utility script `dev/apache2.sh` to start a foreground apache instance passing the `dev/app.conf` settings file.

Customize the utility scripts as needed by your setup.

Happy coding!
