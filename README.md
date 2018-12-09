# SeAT Mining Taxes

This is a SeAT plugin written to levy taxes against entries in the moon mining ledger.

Currently, many groups in EVE tax moon mining for their moons via a workflow that looks something like this:

* Set and define tiers for ores (e.g, 50% for R64s, 25% for R16s...)
* Copy the text output of the moon mining ledger for a given moon over the life of its most recent pull
* Calculate the taxable value of each involved character's pull
* Issue taxes; usually via the mailing of some spreadsheet that is the product of the above steps
* Then, each person has to pay taxes; unless another lookup table is used linking groups of characters to players, each player has to handle all their characters' taxes individually.

Madness!  If you have a SeAT installation that's up and pulling all those corporation mining ledger entries, it already holds all the data necessary to make these calculations on its own and present 'invoices' to issue for the payment.  With access to the characters' wallet journal entries, we can even tell if they've paid or not.

This plugin aims to make this kind of automation a reality and let all the industry managers of eve get back to playing eve.

## Guides
More here as codebase solidifies.

## Current Status
Not in a usable state yet.