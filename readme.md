# Compound Interest Calculator WordPress Widget by [Calculator.iO](https://www.calculator.io/ "Calculator.iO Homepage")

Compound interest calculator that uses the interest formula (A = P(1 + r/n)^nt) to help users understand the impacts of compound interest and money growth over time.

![Compound Interest Calculator Input Form](/assets/images/screenshot-1.png "Compound Interest Calculator Input Form")
![Compound Interest Calculator Calculation Results](/assets/images/screenshot-2.png "Compound Interest Calculator Calculation Results")

## Installation

1. [Download](https://github.com/pub-calculator-io/age-calculator/archive/refs/heads/master.zip) the ZIP file of this repository.
2. Upload the /compound-interest-calculator-master/ folder to the /wp-content/plugins/ directory.
3. Activate the [Compound Interest Calculator](https://www.calculator.io/compound-interest-calculator/ "Compound Interest Calculator Homepage") plugin through the "Plugins" menu in WordPress.

## Usage
* Add the shortcode `[ci_compound_interest_calculator]` to your page or post and configure default mortgage parameters.
* If you are using widgets, just add the Compound Interest Calculator to the sidebar through the `Appearance -> Widgets -> Compound Interest Calculator` menu in WordPress.
* Add the following code: `<?php display_ci_compound_interest_calculator(); ?>` to your template where you would like the Compound Interest Calculator to appear.

## Libraries in Use
1. https://mathjs.org/
2. https://katex.org/
3. https://github.com/aFarkas/lazysizes
4. https://github.com/RobinHerbots/Inputmask
5. https://air-datepicker.com/
6. https://www.chartjs.org/
