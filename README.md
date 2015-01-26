# MailChimp List Segmenter

## About
[MailChimp](http://www.mailchimp.com) allows you to create smaller segments inside of your lists. Segmenting lists is a fantastic way to drill further into an existing list and pick the right people to mail. However, creating segments from a list of emails doesn’t really work that well. The MailChimp List Segmenter allows you to take an existing list of email addresses and run them through a simple PHP Command-Line tool and creates a text file with the emails separated by comma, ready to be written into a static segment.

## How To Use
First, in a CSV explorer (Excel works fine), ensure your emails column is the first column (or change the index in the file).
Second, provide the CSV filename to the script, shown below.
Example: `php segmenter.php filename.csv`
Third, let it work! It’ll let you know when it’s done, and you’ll see a TXT file in the same directory with the same filename.
Example: `filename.csv.txt`

## Parting Words
Feel free to fork or submit pull requests.  Best of luck!