# research-docker-php53-xdebug

## 01-vs-code-remote-container
Visual Studio Code の Remote Container の中で、 Xdebug のステップデバッギングを行います。

Mac では CLI、ウェブブラウザの両方で成功しました。

## 02-vs-code-different-xdebug-host
Xdebug: Documentation » Step Debugging https://xdebug.org/docs/step_debug

> If PHP/Xdebug run on a different machine, virtual host, or in a Docker container, you need to tell Xdebug where to make the debugging connection to, as it is Xdebug that initiates the communication to the IDE, and not the other way around.

PHP / Xdebugが別のマシン、仮想ホスト、またはDockerコンテナーで実行されている場合、IDEへの通信を開始するのはXdebugであり、その逆ではないため、デバッグ接続を確立する場所をXdebugに指示する必要があります。

> In more complex set-ups you need to configure the host and port that Xdebug connects to yourself. With xdebug.client_host you can select the IP or hostname of the machine that runs your IDE, and with xdebug.client_port the TCP port. Make sure that the host running PHP/Xdebug can connect to your IDE with the configured IP address and port, and that there is no firewall or other software blocking an incoming connection.

より複雑な設定では、Xdebugが自分自身に接続するホストとポートを構成する必要があります。 xdebug.client_hostを使用すると、IDEを実行するマシンのIPまたはホスト名を選択でき、xdebug.client_portを使用するとTCPポートを選択できます。 PHP / Xdebugを実行しているホストが、構成されたIPアドレスとポートを使用してIDEに接続できること、および着信接続をブロックするファイアウォールやその他のソフトウェアがないことを確認してください。

PHP Debug - Visual Studio Marketplace https://marketplace.visualstudio.com/items?itemName=xdebug.php-debug

> To make VS Code map the files on the server to the right files on your local machine, you have to set the pathMappings settings in your launch.json.
VS Codeでサーバー上のファイルをローカルマシン上の適切なファイルにマップするには、launch.jsonでpathMappings設定を設定する必要があります。
