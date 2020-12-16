# PHP 7.4 + MySQL + phpMyAdmin Docker Environment

This repo will spin up a very basic set of containers providing the following:

- Apache Web Server
- PHP 7.4 w/ mysqli & zip extensions
- MySQL 8
- phpMyAdmin 5.0.4

## Getting Started

Run `./start.sh` to spin up all of the containers. Your local web server is available at http://localhost:8910, 
phpMyAdmin is available at http://localhost:8911 (username: root; password: password).

If you need to force the containers to rebuild, you can run `./start.sh -b`.

`./shell.sh` will give you a shell on the web server running Apache+PHP.

## Details

This folder will be mounted at `/var/www/html` on the web server.

Apache is configured to serve `/var/www/html/htdocs` as its document root.

Docker will establish a local static network on the 172.20.0.1/24 space of IPs.

Servers and applications are configured with US/Central as their timezone.
