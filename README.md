# SeAT Mining Taxes

This is a SeAT plugin written to levy taxes against entries in the moon mining ledger.

Currently, many groups in EVE tax moon mining for their moons via a workflow that looks something like this:

* Set and define tiers for ores (e.g, 50% for R64s, 25% for R16s...)
* Copy the text output of the moon mining ledger for a given moon over the life of its most recent pull
* Calculate the taxable value of each involved character's pull
* Issue taxes; usually via the mailing of some spreadsheet that is the product of the above steps
* Then, each person has to pay taxes; unless another lookup table is used linking groups of characters to players, each player has to handle all their characters' taxes individually.

Madness!  

If you have a SeAT installation that's up and pulling all those corporation mining ledger entries, it already holds all the data necessary to make these calculations on its own and present 'invoices' to issue for the payment.  It also knows all your alts, allowing you to be shown taxes for all your toons.  With access to the characters' wallet journal entries, we can even tell if they've been paid or not.

This plugin aims to make this kind of automation a reality and let all the industry managers of eve get back to playing eve.

## Guides
More here as codebase solidifies.

### Installation

Navigate to your SeAT installation directory.  Normally if you've set SeAT up using the setup/deployment script, this is `/var/www/seat`.  If you have a docker-based deployment, you'll have to open up a shell with `docker exec` on the seat-app container to run these commands.

First, bring the running system down to maintenance mode:

`php artisan down`

Now, using composer, specify seat-mining-ledger as a required package:

`composer require pathel/seat-fitting`

Publish assets and run the migration:

`php artisan vendor:publish --force --all`

`php artisan migrate`

And bring the SeAT installation up out of maintenance mode:

`php artisan up`

At this point, you should be good to begin setup of the plugin within SeAT.

## Current Status
Still very early in development, so not in a usable state yet.
