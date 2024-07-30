
# Enable Debugging

## Install Xdebug

To enable debugging, [Xdebug](https://xdebug.org/) is recommended.

First open a command prompt and type `php -information` and copy the output to the clipboard:

```bash
php -information
```

Alternatively, you can save the output to a file with the following command and then open the file in a text editor and copy the contents of the file to the clipboard:

```bash
php -information > php-info.txt
```

Open the [Xdebug Wizard](https://xdebug.org/wizard "Xdebug Wizard") and paste the output into the text box and click the "Analyse my phpinfo() output" button.

Follow the instructions to download the correct version of Xdebug and add modify your `php.ini` file:

### Example Instructions

First 23 lines of the 680+ lines of `php -information` output:

```output
phpinfo()
PHP Version => 8.2.12

System => Windows NT MFRAME 10.0 build 22631 (Windows 11) AMD64
Build Date => Oct 24 2023 21:10:40
Build System => Microsoft Windows Server 2019 Datacenter [10.0.17763]
Compiler => Visual C++ 2019
Architecture => x64
Configure Command => cscript /nologo /e:jscript configure.js  "--enable-snapshot-build" "--enable-debug-pack" "--with-pdo-oci=..\..\..\..\instantclient\sdk,shared" "--with-oci8-19=..\..\..\..\instantclient\sdk,shared" "--enable-object-out-dir=../obj/" "--enable-com-dotnet=shared" "--without-analyzer" "--with-pgo"
Server API => Command Line Interface
Virtual Directory Support => enabled
Configuration File (php.ini) Path =>  
Loaded Configuration File => C:\xampp\php\php.ini
Scan this dir for additional .ini files => (none)
Additional .ini files parsed => (none)
PHP API => 20220829
PHP Extension => 20220829
Zend Extension => 420220829
Zend Extension Build => API420220829,TS,VS16
PHP Extension Build => API20220829,TS,VS16
Debug Build => no
Thread Safety => enabled
Thread API => Windows Threads
```

### Example Xdebug Installation Instructions

1. Download [php_xdebug-3.3.2-8.2-vs16-x86_64.dll](https://xdebug.org/files/php_xdebug-3.3.2-8.2-vs16-x86_64.dll)
2. Move the downloaded file to `c:\xampp\php\ext`, and rename it to `php_xdebug.dll`
3. Update [c:\xampp\php\php.ini](file:c:/xampp/php/php.ini) and add the lines:

   ```ini
   zend_extension = xdebug
   xdebug.mode=debug
   ```

### Install Xdebug Helper

Download the [Xdebug Helper](https://chrome.google.com/webstore/detail/xdebug-helper/eadndfjplgieldjbigjakmdgkmoaaaoc) extension for your Browser.

### PHP Storm Debugging

For PHP Storm, you will need to configure the debugger.

Open a project with PHP Storm and press `F5` to debug the project.
