# NTT_Internship2020
- AT共有 / Docomoハッカソン
### ![#f03c15](https://placehold.it/15/f03c15/000000?text=+)`NTT-AT`
- コードの共有とバックアップ
- _Contents_
  - `Development.md`
    - プロジェクト進行のメモをまとめておきました
    - 青色表記は提案したもの 
  - `Topology/`
    - ネットワーク構成を修正しました
  - `Team1/`
    - appのソースコードです
  - `Requirement/`
    - 要件定義
- _Access_     
  - Public View
    - http://20.46.165.16/internship/Team1/Signin/signin.html
  - Internal 
    - 以下のスプレッドシートを共有フォルダとして設定しました。
      - https://docs.google.com/spreadsheets/d/1JInjsHTp7T1aqAKBqBbUYuVtMH53JwbGJicYXmu-vAg/edit#gid=0  
    - プレゼン資料は以下のスライドURLで編集をお願いします。
      - https://docs.google.com/presentation/d/14Tl_QP-z_7Ld_onh3h0TwlHxFS2sNCrQ2aedXml-kac/edit?ts=5f5d8a35#slide=id.g96d09e456d_2_32
### ![#1589F0](https://placehold.it/15/1589F0/000000?text=+) `NTTdocomo`
- _MEMO_
  - パッケージ管理
    - __anaconda__
      - __conda__
    - __pip (Package Install for Python)__
  - パッケージ
    - pip3からインストール
      - `$ pip3 install [パッケージ名]`
    - パッケージリスト
      - `$ pip3 list`
  - `sys.path`パスを通す
    - https://qiita.com/yutoman027/items/7ee796c41575eb0511c3
    - `$ pip3 install [パッケージ名]`
      - 次のように返される場合
        - `>> Requirement already satisfied: [パッケージ名] in /usr/local/lib/python3.8/site-packages (1.19.2)`
      - パスを追加
        - `$ cd /Applications/Xcode.app/Contents/Developer/Library/Frameworks/Python3.framework/Versions/3.8/lib/python3.8/site-packages`
      - 以下を追記
        - `$ sudo nano importmodule.pth`
	```
	/usr/local/lib/python3.8/site-packages`
	```
  - パスの確認
  ```
  import sys
  import pprint
  pprint.pprint(sys.path)
  ```
    
- _CORDING_
  - ライブラリ
    - `sys`
    - `pprint`
    - `pandas`
      - DataFrame：csvファイルの読み書き
    - `numpy`
    - `seaborn`
    - `matplotlib`
      - `matplotlib.pyplot`
    - `boto3`
      - AWS API/SDK
    - `logging`
      - AWS API/SDK
    - `sklearn`
      - 機械学習ライブラリ
      - 学習手法: Random Forest
