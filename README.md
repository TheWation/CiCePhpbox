# Command Injection & Code Execution Sandbox
This project is a sandbox environment that demonstrates the concepts of Command Injection and Remote Code Execution in PHP. It includes several PHP files that showcase different ways in which these vulnerabilities can be exploited.

This application is intended for educational purposes only and should not be used for malicious purposes. It is designed to help developers and security professionals learn about common vulnerabilities and how to protect against them. Users should be aware that executing arbitrary code or commands on a server can be dangerous and can result in security vulnerabilities.

## File Description

### /ce/assert.php

This file accepts a `name` parameter from the query string and uses the `assert` function somewhere in the code on this input. The file then prints "Hi" to the provided name.

### /ce/eval.php

This file accepts a `name` parameter from the query string and uses the `eval` function somewhere in the code on this input. The file then prints "Hi" to the provided name.

### /ci/cat.php

This file accepts a `file` parameter from the query string and uses the `system` function to call the `cat` command to retrieve the contents of the file. The contents of the file are then printed to the screen.

### /ci/ping.php

This file accepts an `ip` parameter from the query string and uses the `system` function to call the `ping` command to ping the target IP. The output of the command is then printed to the screen.

### /ci/ping-regex1.php

This file accepts an `ip` parameter from the query string, verifies the IP structure using a regular expression, and if the IP is valid, uses the `system` function to call the `ping` command to ping the target IP. If the IP is invalid, the user is redirected to a `/403` page.

### /ci/ping-regex2.php

This file accepts an `ip` parameter from the query string, verifies the IP structure using a regular expression in a more secure way, and if the IP is valid, uses the `system` function to call the `ping` command to ping the target IP. If the IP is invalid, the user is redirected to a `/403` page.

### /ci/ping-regex3.php

This file accepts an `ip` parameter from the query string, verifies the IP structure using a regular expression in a more secure way, and if the IP is valid, uses the `system` function to call the `ping` command to ping the target IP. If the IP is invalid, the user is returned an "Invalid IP Address" message.

### /ci/exist.php

This file accepts a `file` parameter from the query string and uses the `system` function to call the `test` binary to check if the file exists or not. If the file exists, the message "The file exists!" is returned, otherwise the message "The file does not exist." is returned.

## Usage

To use this sandbox environment, simply download the files and host them on a PHP-enabled server. You can then access the different files through their respective URLs.

Note that these files are intentionally vulnerable and should not be used on a production server or in any situation where security is a concern. They are designed for educational purposes only to demonstrate how command injection and remote code execution vulnerabilities can be exploited.