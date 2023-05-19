# Please Support This Project!

I would appreciate a donation if you found it useful.

[![](https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif)](https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=53CD2WNX3698E&lc=US&item_name=PREngineer&item_number=PHPUnit%2dTest%2dApp&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted)

You can also support me by sending a BitCoin donation to the following address:

19JXFGfRUV4NedS5tBGfJhkfRrN2EQtxVo

# PHPUnit Test App

A simple web application to showcase how to run PHPUnit tests in YouTube.

# About

This repository contains the necessary information to replicate the PHPUnit tests showcased in my YouTube video on how to perform these types of test cases using Docker.

# How to Use

  * Step 1 - Clone the repository

  * Step 2 - Build using the `Dockerfile-test`

  ```
  docker build -t testapp . -f Dockerfile-test
  ```

  * Step 3 - Run using Docker

  ```
  docker run -it --rm testapp
  ```

  * Step 4 - Execute the test suite manually

  ```
  phpunit tests --testdox
  ```

# License

All rights are reserved by Jorge Pabón.

Use of this application for commercial purposes without a license is not authorized.
For licensing costs contact Jorge Pabón at pianistapr@hotmail.com.
