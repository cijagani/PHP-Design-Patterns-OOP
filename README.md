## Before running programm in your system set codeigniter base url properly?
#### How to set proper codeigniter base url?
```sh
$config['base_url'] = "http://somesite.com/somedir/";
```
##### This can be done either in application/config/autoload.php
##### If using the URL helper, then base_url() will output the above string.

```sh
Passing arguments to base_url() or site_url() will result in the following (assuming
$config['index_page'] = "index.php";:
```
```sh
echo base_url('assets/stylesheet.css'); //http://somesite.com/somedir/assets/stylesheet.css

echo site_url('mycontroller/mymethod'); //http://somesite.com/somedir/index.php/mycontroller/mymethod
```
