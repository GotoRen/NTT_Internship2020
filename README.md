# NTT_Internship2020
## 🌱 NTT-AT
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

## 🌱 NTTdocomo
- _Configuration_
  - `src/dc-s3-1`: フロント
  - `src/fatigue-check-1`: バック
  - `src/save`: 保存画像プール
  - `src/test_code`: AWS動作確認
- _Tools_
  - AWS: デプロイ
  - Trello: タスク管理
  - Draw.io: 構成図の作成
  - Prott: アプリケーションフローの作成
  - miro: アイデア出し
  - Free Logo Generator Online: ロゴの作成
  - Jupyter Notebook: エディタ
- _Location_
  - docomo Developer support: https://dev.smt.docomo.ne.jp/?p=login
  - Repl-AI: https://repl-ai.jp/#
  - AWS: https://aws.amazon.com/jp/
    - IAMユーザ
  - Boto3 Documentation: https://boto3.amazonaws.com/v1/documentation/api/latest/guide/s3-uploading-files.html
- _Reference_
  - https://www.nttdocomo.co.jp/info/news_release/2018/03/19_02.html
  - https://www.nttdocomo.co.jp/info/news_release/2019/04/12_01.html
  - https://www.nttdocomo.co.jp/info/news_release/2020/05/28_03.html
  - https://www.nttdocomo.co.jp/service/mydaiz/
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
	/usr/local/lib/python3.8/site-packages
	```
  - パスの確認
  ```
  import sys
  import pprint
  pprint.pprint(sys.path)
  ```
- _Library_
  - `sys`
  - `pprint`
  - `pandas`
    - <u>DataFrame：csvファイルの読み書き</u>
  - `numpy`
  - `seaborn`
  - `matplotlib`
    - `matplotlib.pyplot`
  - `boto3`
    - <u>AWS API/SDK</u>
  - `logging`
    - <u>AWS API/SDK</u>
  - `awscli`
    - <u>AWS Control</u>
  - `sklearn`
    - <u>機械学習ライブラリ</u>
    - <u>学習手法: Random Forest</u>
- _View_
  - Front: https://prottapp.com/p/6b89aa#/s/5f64148a4942fb19264a7694
  - Back: http://dc-s3-1.s3-website-ap-northeast-1.amazonaws.com/Tom/index.html
- _Other_
  - https://rakuten-intern2020-b5.web.app/#/
