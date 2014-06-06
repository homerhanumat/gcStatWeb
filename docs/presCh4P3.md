Two Numerical Variables (Part 3)
========================================================
author: Rebekah Robinson, Georgetown College
transition:  none
transition-speed:  fast
navigation: slide



Load Packages
================




Always remember to make sure the necessary packages are loaded:


```r
require(mosaic)
require(tigerstats)
```





Cautions
==================
type:  section
id:  Cautions

- [Extrapolation](#/Extrapolation)
- [Influential Observations](#/InfObs)
- [Assocation versus Causation](#/AssocCaus)
- [Simpson's Paradox](#/Simp)



Extrapolation
==================
type:  sub-section
id:  Extrapolation



[Back to Cautions](#/Cautions)

What is Extrapolation?
==============


**Extrapolation** is estimating the value of a response variable using it's relationship with an explanatory variable whose value is outside the original range of observed values. 

Extrapolation:  An Example
==============

The regression line from the Penn State data relating height and right handspan is 

$\hat{y}=41.96+1.239x$.

The range of observed right handspans in this dataset is 12.5 cm to 26 cm.

***

![plot of chunk unnamed-chunk-3](presCh4P3-figure/unnamed-chunk-3.png) 



Example continued
================

The tallest living male, Sultan Kosen, has a right handspan of 30.48 cm.  The Penn State regression line would predict his height to be 

$$\hat{y}=41.96+(1.239)(30.48)=79.72 \mbox{ inches}.$$

Sultan Kosen is really 8' 3"! (99 inches)

Extrapolation can result in inaccurate predictions.





Influential Observations
==================
type:  sub-section
id:  InfObs

[Back to Cautions](#/Cautions)

Risks 
===============

Influential observations

* have extreme $x$-values,

* inflate or deflate correlation,

* affect the slope of the regression line.

Graphic:  Influential Observation
======================

![plot of chunk unnamed-chunk-4](presCh4P3-figure/unnamed-chunk-4.png) 


***

![plot of chunk unnamed-chunk-5](presCh4P3-figure/unnamed-chunk-5.png) 


Further Investigation
==============================

Investigate influential observations further with the following app:

```r
require(manipulate)
Points2Watch()
```


Association versus Causation
==================
type:  sub-section
id:  AssocCaus



[Back to Cautions](#/Cautions)


An Example
=========

In **m111survey**, there is a negative association between one's height and GPA.

Correlation does not imply causation!

***

![plot of chunk unnamed-chunk-8](presCh4P3-figure/unnamed-chunk-8.png) 



```
[1] -0.1292
```


Example continued
============

Confounding variables may be responsible, at least partially, for the observed association.

**Sex** may be a possible confounder.

***

![plot of chunk unnamed-chunk-10](presCh4P3-figure/unnamed-chunk-10.png) 


Example continued
=================

* Mean guy height = 71.92
* Mean guy GPA = 3.03



* Mean gal height = 64.94
* Mean gal GPA = 3.33

On average, guys are taller than gals but have lower GPAs.  This helps to explain the negative association.


***

![plot of chunk unnamed-chunk-11](presCh4P3-figure/unnamed-chunk-11.png) 


Example continued
================

**Recall:** The correlation coefficient for the aggregate data is -0.1292

The correlation coefficient for the guys is 0.2107.

The correlation coefficient for the gals is 0.0216.

This is an example of **Simpson's Paradox**.


***

![plot of chunk unnamed-chunk-12](presCh4P3-figure/unnamed-chunk-12.png) 



Simpson's Paradox
==================
type:  sub-section
id:  Simp

[Back to Cautions](#/Cautions)


Recall
======

**Simpson's Paradox** occurs when the direction of the relationship is one way when you look at the aggregate data, but turns out the opposite way when the data is broken into subgroups based on a third variable.  

**Recall how this was stated in Chapter 3**:  Simpson's Paradox occurs when a relationship between variables $X$ and $Y$ reverses its direction when the data are broken down by the values of a third variable $Z$.

Example:  SAT 
========

Take a look at the **sat** dataset:


```r
data(sat)
View(sat)
help(sat)
```


>**Research Question**:  How is annual teacher salary related student performance on the SAT? 

* Explanatory variable, $X$:  **salary** (numerical)

* Response variable, $Y$:  **sat** (numerical)

SAT Regression Analysis
======================

Correlation Coefficient


```
[1] -0.4399
```


States that pay teachers higher annual salaries have lower average SAT scores.

Can this be true?

***

![plot of chunk unnamed-chunk-15](presCh4P3-figure/unnamed-chunk-15.png) 


A Third Variable
================

Use the following app to investigate what happens when you take into account a third variable, $Z$, **frac**:



```r
require(manipulate)
DtrellScat(sat~salary|frac,data=sat)
```


The variable **frac** is the percentage of students in the state who take the SAT.


Explaining the Paradox:  First Observation
=================

There is a *positive* association between **frac** and **salary**.

States where education is a high priority pay their teachers higher salaries.

In these states, a high proportion of students take the SAT.  Education is a high priority so many students *want* to go to college.

***

![plot of chunk unnamed-chunk-17](presCh4P3-figure/unnamed-chunk-17.png) 


Explaining the Paradox:  Second Observation
=================

There is a *negative* association between **frac** and **sat**.

States with a high % taking the SAT have low SAT scores.  SAT takers make up a broad pool

States with a low % taking the SAT have high SAT scores.  SAT takers make up an elite pool.

***

![plot of chunk unnamed-chunk-18](presCh4P3-figure/unnamed-chunk-18.png) 


Explaining the Paradox:  Putting it Together
=================

Positive Association between **salary** and **frac** 

+

Negative Association between **frac** and **sat**

$=$

Negative Association between **salary** and **sat**.

>States where education is important pay teachers well, but also encourage **most** students to take the SAT.  This handicap results in high salaries accompanying low SAT scores.


