# Skin

Customizing skin is easy.

Hubleto app comes with a pre-built skin which is based on skin of ADIOS framework. Thanks to TailwindCSS, customizing all this a very simple exercise and you do not need to have much experience with CSS styling.

Basically, there are three levels of custimizing the skin:

  * changing default colors, fonts and root variables
  * overriding default CSS styling in `@layer app`
  * ignoring default CSS styling and writing a new one

## Changing default colors, fonts and root variables

All CSS styling is specified in `Main.twcss` file. It also contains a layer `@theme` which can be perfectly used to customize your CSS theme and variables:

###### ./src/Main.twcss
```css
@theme {
  --font-sans: 'Fredoka-Regular', 'sans-serif';
  --font-serif: 'Merriweather', 'serif';

  --color-primary: #008000;
  --color-secondary: #7FB562;
  
  --spacing-8xl: 96rem;
  --spacing-9x': 128rem;

  --radius-4xl: 2rem;
}
```

Change this configuration group whatever you want.

## Overriding default styling

In the `Main.twcss` file, you can find this line of code:

###### ./src/Main.twcss
```css
@layer theme, base, components, utilities, primereact, adios, app;
```

This tells TailwindCSS to prioritize some layers over the others. The last layer, `@app`, is then the most important. This means that everything you will declare in this layer, will override the layers before.

So, if you want for example to change the size of the font in buttons, override the `.btn` class in this layer:

###### ./src/Main.twcss
```css
@layer app {
  /* add your custom css here */
  .btn { @apply text-xl }
}
```

## Ignoring default styling and writing a new one

Lastly, you can completely ignore the default styling and create your new one. To do this, simply delete or comment following `@import` directives in the `Main.twcss` file that import the default styling file keep only tailwind default. Your `Main.twcss` should now look like this:

###### ./src/Main.twcss
```css
@config "../tailwind.config.js";
@layer theme, base, components, utilities, app;
@import "tailwindcss";
@layer app { /* add your custom css here */ }
```