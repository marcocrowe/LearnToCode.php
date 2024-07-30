
# Install PHP

**DON'T** install [XAMPP](https://www.apachefriends.org/index.html "XAMPP") or [WAMP](https://www.wampserver.com/en/ "WAMP") as they are not necessary and can/***(WILL)*** cause  issues with your system, but if you must read the [XAMPP Install Guide](xampp-install.md) **first**.

## Windows

For Windows, you can download the PHP installer from the [PHP For Windows](https://windows.php.net/download#php-8.3)

- Choose Thread Safe (TS) if PHP is running as a module within a web server.
- For a 64-bit system, Choose the 64-bit version of PHP.

For PHP 8.3 (8.3.9) with the following options:

- VS16 x64 Non Thread Safe
- **[VS16 x64 Thread Safe](https://windows.php.net/downloads/releases/php-8.3.9-Win32-vs16-x64.zip)** *(This is the version you want)*
- VS16 x86 Non Thread
- VS16 x86 Thread Safe

Download the zip file and extract it to a directory of your choice. For example, `C:\ProgramFiles\php-8.3.9-Win32-vs16-x64\`.

Next add this PHP directory to your system path.

To verify the installation open a command prompt and type:

```bash
php -version
```

You should see something like:

```output
PHP 8.3.9 (cli) (built: Jul  2 2024 18:18:06) (ZTS Visual C++ 2019 x64)
Copyright (c) The PHP Group
Zend Engine v4.3.9, Copyright (c) Zend Technologies
```
