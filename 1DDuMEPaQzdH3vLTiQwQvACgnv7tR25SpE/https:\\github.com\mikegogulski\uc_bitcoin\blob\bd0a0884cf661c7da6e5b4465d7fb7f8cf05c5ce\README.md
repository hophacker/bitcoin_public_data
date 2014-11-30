https://github.com/mikegogulski/uc_bitcoin/blob/bd0a0884cf661c7da6e5b4465d7fb7f8cf05c5ce/README.md
uc_bitcoin/README.md at bd0a0884cf661c7da6e5b4465d7fb7f8cf05c5ce · mikegogulski/uc_bitcoin · GitHub
Skip to content
Sign up
Sign in
Explore
Features
Enterprise
Blog
This repository
This repository
All repositories
Star
10
Fork
5
public
mikegogulski/uc_bitcoin
Code
Pull Requests
0
Pulse
Graphs
Network
HTTPS clone URL
Subversion checkout URL
You can clone with
HTTPS
or Subversion.
Download ZIP
Permalink
tree:
bd0a0884cf
Switch branches/tags
Branches
Tags
master
Nothing to show
Nothing to show
uc_bitcoin / README.md
Fetching contributors…
Cannot retrieve contributors at this time
file
106 lines (82 sloc)
3.407 kb
Edit
Raw
Blame
History
Delete
uc_bitcoin
A Bitcoin payment method for the
Ubercart shopping cart for Drupal.
Version: @@uc_bitcoin-version@@
Features
Generates a new bitcoin address for every order
Provides payment address to customer on site at checkout, plus in a
subsequent email
Configurable timeout after which unpaid transactions will be canceled
automatically
Configurable number of Bitcoin network confirmations after which an order
is considered paid
HTTP or HTTPS access to bitcoind
Requirements
Base requirements
Ubercart 2.x
Drupal 6.x
PHP requirements:
PHP5
cURL support
SSL support (if you're using HTTPS to talk to bitcoind)
Limitations
It is assumed that Bitcoin is the only currency accepted.
All prices are assumed to be in Bitcoins, and no currency conversions are
performed.
Checks for payment receipt are performed via Drupal cron, at least until
bitcoind allows attaching a JSON-RPC callback to an address.
Orders for downloadables are not tagged as "shipped" once paid.
No localization support.
Installation
Install Drupal 6 http://drupal.org/documentation/install.
Install Ubercart 2 http://www.ubercart.org/docs/user/8075/installing_ubercart.
Transfer the contents of the distribution archives to the modules/ directory
of your Drupal installation. Configuration
Log into your Drupal installation as an administrator.
Navigate to Administer->Site building->Modules and enable the Bitcoin module
Navigate to Administer->Store administration->Configuration->Payment settings
Click "Edit" at top, then "Payment methods"
Enable the Bitcoin payment method and disable all others
Expand the "Bitcoin settings" dropdown and proceed as follows:
Configure your bitcoind server information.
If you are using HTTPS to talk to bitcoind and would like to validate
the connection using bitcoind's own SSL certificate, enter the
absolute path to the certificate file (server.cert) you've uploaded
to the server.
Configure your payment timeout and number of transaction confirmations
required.
Save configuration.
Navigate to Administer->Store administration->Configuration->Store settings
Clik "Edit", then "Format settings"
Expand the "Currency format" dropdown
Set "Default currency" and "Currency sign" to "BTC"
Save configuration
Donate
Bitcoin payments: 1DDuMEPaQzdH3vLTiQwQvACgnv7tR25SpE
Gifts via other methods: http://www.nostate.com/support-nostatecom/
Authors
Mike Gogulski -
http://www.nostate.com/ http://www.gogulski.com/
Credits
uc_bitcoin incorporates code from:
XML-RPC for PHP by Edd Dumbill (for JSON-RPC support)
bitcoin-php by Mike Gogulski (Bitcoin support library)
License
uc_bitcoin is free and unencumbered public domain software. For more
information, see http://unlicense.org/ or the accompanying UNLICENSE file.
Jump to Line
Go
Status
API
Training
Shop
Blog
About
© 2014 GitHub, Inc.
Terms
Privacy
Security
Contact
Something went wrong with that request. Please try again.

