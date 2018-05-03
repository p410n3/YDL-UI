# YDL-UI

Minimalistic, portable and selfhosted Interface for the famous [youtube-dl](https://rg3.github.io/youtube-dl/) CLI tool.

![GIF](https://i.imgur.com/f3uKMON.gif)

I made this because most public downloaders either:
- Have adblock bypasses, coinhive scripts or PRO plans you have to buy,
- Dont put thumbnails and meta data in the file, 
- Dont support downloading playlists.

youtube-dl supports all this, but all the UIs I found werent really my taste. So I made my own.

# Features
- Make multiple users
- Log every (succesful) download in the log.php
- configuration variables are all stored in an config.php
- Download whole channels, playlists, trackstations etc. (And MANY other sites are supported as well for example soundcloud)
- Writes artists and Thumbnails to mp3s (when using default config parameter)
- Deletes all files that are older than specified in the config
- Completeley database less
- Pass CLI arguments through the Interface [example](https://i.imgur.com/Ax1xTNl.png) (dont worry its escaped :D)
- Responsive design to use it on your phone!

# Idea of this Project

This downloader is meant to be used as a selfhosted and private Service. It was designed with this in mind and DOES not scale well. 
Its not to be released publicly, as this will probably just flood your Harddrive. It was meant to be shared and used by you and some friends you trust. To explain further, its because of these functionalitys:

- Files are deleted based on how old they are. Filesize doesnt matter!
- There is no Downlaod limit
- Its easy to just spam forms and basically flood your server.

So use with care!

# Todo

Before the next big update drops (v1.5) I have following things on my todo list:
- ~~A fully working progress bar~~ substituded with liveExec() ✔ done
- Download as .zip
- More specific file types
- FE fixes and navbar ✔ done
- better password hashing

# Installation

You need:
- Linux / Unix Webserver with PHP (windows not tested)
- The command ```popen``` and / or ``` exec ``` cant be blacklisted (Apache does this by default IIRC)
- youtube-dl installed:
    ```
    sudo curl -L https://yt-dl.org/downloads/latest/youtube-dl -o /usr/local/bin/youtube-dl
    sudo chmod a+rx /usr/local/bin/youtube-dl
    ```
- ffmpeg installed to download mp3 files 
    ``` 
        sudo apt install ffmpeg
    ```

1. Download the release (**PLEASE do download from there. The master branch might contain critical bugs!**)
2. Unzip it and upload to your webdirectory
3. Make sure to make the owner of the folder to your webservers user (e.g. apache or www-data) and set permissions as 775
    - You can use either CHOWN and CHMOD [READ MORE HERE](https://www.cyberciti.biz/faq/how-to-use-chmod-and-chown-command/)
    - Or use an FTP client such as winSCP [example](https://i.imgur.com/lbyK2Gy.png)
4. navigate to the config.php and configure to your likings. (For md5 hashes I use http://www.md5.cz/)
5. Default password is "password"

# Questions?

make an issue if you have any questions, improvemenets or critic. 
have fun :)
    
