# Nested Relations Plugin
 
## Using this plugin 

To install this plugin, extract this archive to `/plugins/dominicmercier/nikeid` and migrate the database by performing one of the following:

1. Log out and sign back in to the back-end; or
2. Run CLI command `php artisan october:up`

To view the plugin click on **NikeID** in the back-end area.


## Actual result

1. Select the **Hockey Glove** product. 
2. Go to **Layers** tab. 
3. Click **Finger** layer. A popup form should appear. 

As you can see, each layer can be available in 6 various colors. Each colors is displayed in a checkbox.

## Expected result

The colors relations look good if we have a small number of colors. It would be better if we could **add|remove** color associated with this layer with a complete October back-end list view.  

I usually do this by creating a partial that render relation using:  
<?= $this->relationRender('layers') ?> in a controller.

Which looks like this:  
![alt text](https://www.dropbox.com/s/jw5doc3876yi7jg/Screenshot%202016-04-25%2018.24.41.png?dl=1 "October back-end list view")
![alt text](https://www.dropbox.com/s/72kqsmissdtolp1/Screenshot%202016-04-25%2018.29.01.png?dl=1 "October back-end form")



Anyone know how to do this kind of relations inside another relations?
