/*
Navicat MySQL Data Transfer

Source Server         : test
Source Server Version : 50540
Source Host           : localhost:3306
Source Database       : simpleblog

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2015-07-06 20:27:59
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for blogs
-- ----------------------------
DROP TABLE IF EXISTS `blogs`;
CREATE TABLE `blogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(32) NOT NULL,
  `content` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `scans` int(11) DEFAULT '0',
  `praises` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `blog_user` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of blogs
-- ----------------------------
INSERT INTO `blogs` VALUES ('17', '习近平所称赞职校学生参加全国大赛(图)', '<p>贵州省机械工业学校学生李明扬（左）、庄太双到天津参加全国职业院校技能大赛。幸运的是，赛前他们在学校里见到了习近平总书记。他们说，学好技能，报效国家。　　贵州省机械工业学校学生李明扬（左）、庄太双到天津参加全国职业院校技能大赛。幸运的是，赛前他们在学校里见到了习近平总书记。他们说，学好技能，报效国家。<br />\r\n　贵州省机械工业学校学生李明扬制作的&ldquo;赤心报国&rdquo;棋盘。这是6月17日习近平总书记在贵州考察时见到的棋盘，上面刻着&ldquo;赤心报国&rdquo;字样。李明扬说，他忘了跟总书记解释了，自己想说的是，&ldquo;我们学好技术就是为了实现中国梦，尽自己的一份努力来报效国家&rdquo;。　　　贵州省机械工业学校学生李明扬制作的&ldquo;赤心报国&rdquo;棋盘。这是6月17日习近平总书记在贵州考察时见到的棋盘，上面刻着&ldquo;赤心报国&rdquo;字样。李明扬说，他忘了跟总书记解释了，自己想说的是，&ldquo;我们学好技术就是为了实现中国梦，尽自己的一份努力来报效国家&rdquo;。<br />\r\n　　本报记者 张国文并摄《中国青年报》（2015年07月06日12版）</p>\r\n\r\n<p>　　带着习近平总书记的鼓励，18岁的贵州省机械工业学校学生李明扬来到了天津的2015年全国职业院校技能大赛上。</p>\r\n\r\n<p>　　在国家最高赛场的竞技整整持续了4个半小时，但李明扬在他熟悉的数控机床前做到了游刃有余。他千里迢迢带来将近20把刀具和两把游标卡尺&mdash;&mdash;这是一位技能高手的随身&ldquo;武器&rdquo;。</p>\r\n\r\n<p>　　半个多月前，也是这样的工具，也是在一台数控机床前，李明扬见到了习近平总书记&mdash;&mdash;6月17日下午，正在贵州调研工作的习近平来到贵州省机械工业学校的实训基地。</p>\r\n\r\n<p>　　该校校长武斌儒对中国青年报记者回忆，考察过程中，总书记询问最多的就是学生的情况，跟同学们有很多互动，足见他对职业技能人才的关心。</p>\r\n\r\n<p>　　数控技术应用专业二年级的李明扬当时正在机床上加工零件。他是贵州省数控铣床项目技能竞赛亚军，晋级了全国大赛。</p>\r\n\r\n<p>　　在热闹的实训基地，武斌儒校长向习总书记介绍了这位&ldquo;国手&rdquo;。听说李明扬即将代表贵州参加全国职业院校技能大赛，习近平停下脚步，面带笑容向他伸出了手，询问他参加什么项目、比赛如何评分。</p>\r\n\r\n<p>　　李明扬告诉总书记，自己参加的数控铣床项目一要考查选手完成零件的速度，二要看零件的精度，此外还有理论、计算机软件方面的笔试。他取出了自己在机床上生产出来的一张棋盘，习近平接过来，兴致勃勃地端详。</p>\r\n\r\n<p>　　那是一个10厘米见方、微缩精致的中国象棋棋盘，铝合金材质，闪着银光。李明扬用精心刻出的11枚铝合金棋子摆成一个经典的棋谱。在&ldquo;楚河汉界&rdquo;的位置，他刻下了&ldquo;中国梦&rdquo;与&ldquo;赤心报国&rdquo;几个字。李明扬向总书记解释，这个棋局的名字，就叫&ldquo;赤心报国&rdquo;。</p>\r\n\r\n<p>　　习近平把棋盘还给他，夸他做得&ldquo;很好&rdquo;。最后，他亲切地拍了拍李明扬的肩膀，祝愿他在全国大赛上取得优异成绩。</p>\r\n\r\n<p>　　&ldquo;国家领导人来鼓励我们，我们能不高兴吗？&rdquo;站在一旁的数控实验班一年级学生、同为全国大赛晋级选手的庄太双看到这一幕，也感到很荣幸。17岁的庄太双觉得，这是来自国家最高领导人的鼓舞。</p>\r\n\r\n<p>　　刻有&ldquo;中国梦&rdquo;的棋盘是李明扬平时实训的得意之作。他是棋迷，常在手机游戏中钻研棋局。这些棋局的名字后面都有一个动人故事，有的叫&ldquo;三军夺帅&rdquo;，有的叫&ldquo;诸葛出庐&rdquo;。加工这件作品时，他特意选了&ldquo;赤心报国&rdquo;。</p>\r\n\r\n<p>　　能够得到习近平总书记的当面鼓励，在李明扬看来，是&ldquo;我们这些中职生&rdquo;难得的机会。</p>\r\n\r\n<p>　　这个瘦弱的小伙子原本没有想过要加入&ldquo;我们这些中职生&rdquo;的行列。他坦言，3年前的中考，由于自己初中时代&ldquo;贪玩&rdquo;，成绩不佳，没能考上高中，&ldquo;那时很迷茫&rdquo;。</p>\r\n\r\n<p>　　在深圳打工半年后，他觉得&ldquo;没意思&rdquo;，想&ldquo;学点技术，出去站住脚跟&rdquo;。李明扬听说数控专业不错，在网上查到了贵州省机械工业学校，就去报了名。他并不知道，从那一刻起自己将会被锻造为&ldquo;中国制造&rdquo;链条上一颗精良的螺丝钉，而且是国家级的高手。</p>\r\n\r\n<p>　　贵州省机械工业学校是一所以装备制造业职业教育见长的国家中等职业教育改革发展示范学校。武斌儒校长对记者说，随着中国制造的&ldquo;升级&rdquo;，学校的教育也在&ldquo;升级&rdquo;，不断地调整专业布局，为高端制造业培养人才。</p>\r\n\r\n<p>　　就在李明扬平时磨练技艺的实训中心墙上，写着习近平去年在上海视察大飞机项目时说的一句话：&ldquo;我们要做一个强国，就一定要把装备制造业搞上去。&rdquo;</p>\r\n\r\n<p>　　2015年5月，国务院总理李克强签发了我国实施制造强国战略第一个十年的行动纲领《中国制造2025》，很快，&ldquo;中国制造2025&rdquo;的字样也出现在这面墙上。</p>\r\n\r\n<p>　　制造强国战略的落子，深刻影响了原本只想学一门简单技术的李明扬的职业规划。据武斌儒校长介绍，他们一直在思考职业院校如何响应中央的布局，近一年新建了适应制造业发展趋势的智能制造实训基地，数控、焊接等专业的学生都导入了工业机器人实训课程。</p>\r\n\r\n<p>　　&ldquo;总书记在关注制造业升级，我们从学校和产业发展的角度，也在考虑怎么做得更好。&rdquo;武斌儒说。</p>\r\n\r\n<p>　　习近平到该校考察时，智能制造实训设备引起他很大的兴趣。当时，李明扬的学弟、2014级学生高余操作机械手，在电子屏上写了&ldquo;中国梦&rdquo;3个大字。习近平兴致勃勃走过去，询问他有什么梦想。高余告诉总书记，自己的梦想是学好这门技术，建设家乡。总书记又问他&ldquo;更大的梦想&rdquo;是什么，他说，想把&ldquo;Made in China&rdquo;带到全世界去，这赢得了总书记的夸奖：&ldquo;好志向。&rdquo;</p>\r\n\r\n<p>　　习近平还询问武斌儒，这种工业机器人是国产设备还是进口设备，成本是多少。武斌儒回答，如果用进口设备，一台的价格在25万元到27万元之间，这里选用的是国产设备，11万元到15万元。习近平听后频频点头。</p>\r\n\r\n<p>　　在3D成型技术教学区的激光打印区，机电专业学生王开兵用激光打印机在一张铝箔上打印了&ldquo;崇德尚能，励学敦行&rdquo;校训，赠送给习近平，并做了一番解释。武斌儒对记者回忆，大家意想不到的是，总书记欣然收下了这份礼物，还拍了拍王开兵的肩膀，对他说&ldquo;共勉，共勉&rdquo;。</p>\r\n\r\n<p>　　对于习总书记的关切，对于&ldquo;中国制造2025&rdquo;，李明扬有自己的认识。他对记者说，国家重视制造业，让行业&ldquo;升级&rdquo;，这意味着会有更多的机会，有利于今后的发展，&ldquo;我们更加要好好干&rdquo;。</p>\r\n\r\n<p>　　进入职业学校以后，李明扬在家人中的地位有了明显变化。以前，他是&ldquo;及格万岁&rdquo;、成绩偏差的中学生。很多人对中职学校带有偏见，认为学风不好、学生调皮。在获得了一等奖学金、三好学生、技能大赛一等奖等一连串的荣誉之后，他在父母眼中变了。这次，父母更加为他骄傲了。很多亲戚朋友从电视机里看到了站在习近平面前汇报的他，对他&ldquo;刮目相看&rdquo;。他的初中同学今年参加了高考，对他也非常羡慕。这是以前不敢想象的。</p>\r\n\r\n<p>　　庄太双也有同样的感受。他来自贵州毕节，曾考入一所普通中学，读了两个多月就退学了。家人曾为他感到&ldquo;心寒&rdquo;。他在蛋糕店打过下手，在建筑工地刷过墙，因为一个偶然的机会进了中职学校。现在，他是家人的骄傲。</p>\r\n\r\n<p>　　这两个小伙子都曾是网络游戏迷。现在，他们觉得网游没意思，还浪费时间和精力。业余时间，他们喜欢在网上查找德国、日本等发达国家的数控机床的视频，觉得比玩游戏&ldquo;更有动力&rdquo;。&ldquo;看一下现在的机床技术发展到什么程度&mdash;&mdash;我们要跟上别人的脚步。&rdquo;李明扬说。</p>\r\n\r\n<p>　　他们的远期目标是相近的：借着国家重视制造业的机遇，学好技术，&ldquo;存点钱&rdquo;，然后自己也开一个工厂，&ldquo;顺着这个潮流让自己发展得更好&rdquo;。谈起这点，李明扬有点不好意思，因为他觉得这个想法&ldquo;太夸张了&rdquo;。但确实很多同学都有这样的打算，平时他们总开玩笑，办厂的话，&ldquo;钱不够大家凑&rdquo;。只要学好本领，不怕没有出路。</p>\r\n\r\n<p>　　到天津参加比赛，是他们第一次来到北方。虽然最终没有得奖，比赛之余，老师特地带他们去看了大海，花了好几个小时参观了一艘国外退役的航母，让他们见识国外的机械加工水平，&ldquo;长点儿志气&rdquo;。</p>\r\n\r\n<p>　　带着习总书记的祝福参赛，李明扬感觉自己发挥得不错，比平时训练的水平还提高了一步。见到习总书记那天，他没来得及解释自己制作那个&ldquo;赤心报国&rdquo;棋局的含义：&ldquo;我想表达我内心的想法。我想说，我们学好技术就是为了实现中国梦，尽自己的一份努力来报效国家&mdash;&mdash;不知道总书记知道不知道。&rdquo;</p>\r\n\r\n<p>（原标题：带着总书记的祝福上赛场）</p>\r\n\r\n<p>更多猛料！欢迎扫描下方二维码关注新浪新闻官方微信(xinlang-xinwen)。</p>\r\n', '2', '2015-07-06 12:04:28', '2015-07-06 12:04:28', null, '0', '0');
INSERT INTO `blogs` VALUES ('18', '收评:沪指涨2.41%振幅达8.74% 金融股拉升护盘', '<p><img alt=\"\" src=\"http://localhost/image/blog/077908e563bd2401cefdda35c0b16744.png\" style=\"height:1024px; width:1024px\" /></p>\r\n\r\n<p>2015年07月06日&nbsp;15:02&nbsp;&nbsp;<a href=\"http://finance.sina.com.cn/\" target=\"_blank\">新浪财经</a>&nbsp;<a href=\"http://weibo.com/finance?zwm=finance\">微博</a>&nbsp;<a href=\"http://finance.sina.com.cn/stock/jsy/20150706/150222601980.shtml#J_Comment_Wrap\">我有话说(78,204人参与)</a>&nbsp;<a href=\"javascript:;\" target=\"_self\">收藏本文</a>&nbsp;&nbsp; &nbsp;&nbsp;</p>\r\n\r\n<p><a href=\"http://finance.sina.com.cn/realstock/company/sh000001/nc.shtml\" target=\"_blank\"><img alt=\"收评:沪指涨2.41%振幅达8.74%金融股拉升护盘\" src=\"http://image.sinajs.cn/newchart/png/min/cn_min/n/sh000001.png\" /></a></p>\r\n\r\n<p>热点栏目<a href=\"http://vip.stock.finance.sina.com.cn/moneyflow/\" target=\"_blank\">资金流向</a><a href=\"http://vip.stock.finance.sina.com.cn/q/go.php/vInvestConsult/kind/qgqp/index.phtml\" target=\"_blank\">千股千评</a><a href=\"http://finance.sina.com.cn/stock/message/gxq/sh600000/ggzd.htm\" target=\"_blank\">个股诊断</a><a href=\"http://vip.stock.finance.sina.com.cn/q/go.php/vIR_RatingNewest/index.phtml\" target=\"_blank\">最新评级</a><a href=\"http://i.finance.sina.com.cn/chaogu/?f=caishou#cGFyZW50OmJ1eSY=\" target=\"_blank\">模拟交易</a><a href=\"http://m.sina.com.cn/m/finance.html\" target=\"_blank\">客户端</a></p>\r\n\r\n<p><a href=\"http://finance.sina.com.cn/focus/wajueniugu1/\" target=\"_blank\"><img alt=\"舆情牛股\" src=\"http://i0.sinaimg.cn/cj/2015/0325/U11319P31DT20150325172440.png\" />&nbsp;消息股汇总：7月6日盘前提示十只股整体涨幅达3.38%</a></p>\r\n\r\n<p><a href=\"http://finance.sina.com.cn/stock/level2/orderIntro.html\" target=\"_blank\"><img alt=\"Level2行情\" src=\"http://i1.sinaimg.cn/cj/2015/0623/U11319P31DT20150623132636.png\" />&nbsp;沪深Level2十档行情 掌握主力动向</a></p>\r\n\r\n<p><a href=\"http://sax.sina.com.cn/click?type=nonstd&amp;t=REowMDAwNzAxMg%3D%3D&amp;sign=6462f24f286348dd&amp;url=http%3A%2F%2Fwww.cftong.com%2F32%2F5051.html\" target=\"_blank\"><img alt=\"手机炒股\" src=\"http://i3.sinaimg.cn/cj/deco/2014/0117/images/icon01.png\" />&nbsp;涨停尖兵：高频监控盘中涨停股</a></p>\r\n\r\n<p>　　新浪财经讯 周一早盘，沪指高开大涨逾7%，开盘近千股涨停，早盘高开低走，盘中破3900、3800、3700点，仅金融股逆势大涨，午后开盘沪指跳水逼近前期新低，权重股低迷，题材股盘中再现跌停潮，盘中<a href=\"http://finance.sina.com.cn/realstock/company/sh601857/nc.shtml\" target=\"_blank\">中国石油</a>(13.01,&nbsp;1.18,&nbsp;9.97%)、银行、券商等大盘蓝筹股护盘明显，涨幅均在7%以上，临近尾盘沪指震荡走高，全天振幅达8.74%。两市逾900股跌停，仅仅55只个股涨停。</p>\r\n\r\n<p>　　截止收盘，沪指报3775.91点，涨89.00点，涨幅2.41%；深成指报12075.77点，跌170.26点，跌幅1.39%；创业板报2493.83点，跌111.45点，跌幅4.28%；<a href=\"http://finance.sina.com.cn/realstock/company/sz399416/nc.shtml\" target=\"_blank\"><strong>大数据I300指数</strong></a>报3385.02点，涨35.19点，涨幅1.05%。</p>\r\n\r\n<p>　　成交量方面，沪市成交9434.20 亿元，深市成交6090.84亿元，两市共成交15 525.04 亿元。两市成交量较上一交易日明显放大。</p>\r\n\r\n<p>　　板块方面，银行、保险、证券涨幅靠前，航空制造、通信设备、互联网、国产软件、智能机器跌逾6%，体育概念、无人机、卫星导航、电子支付、油气改革跌逾7%。</p>\r\n\r\n<p>　　<strong>后市展望</strong></p>\r\n\r\n<p>　　<a href=\"http://finance.sina.com.cn/realstock/company/sh601901/nc.shtml\" target=\"_blank\">方正证券</a>(11.52,&nbsp;0.83,&nbsp;7.76%)表示，国家已出手，众志已成城，无论是资金，还是政策，开始向有利于多方转移，国家决心、政策支持、资金转向、技术背离、市场舆论五点共振，此时做空要远比做多风险大，本周大盘有望阳线报收。操作上，不做空，不追高，重仓者观望为主，轻仓者逢低关注50ETF、50ETF标的、融资盘较轻的资源股、近期连续大幅下挫股及低价蓝筹股，回避融资盘较重股。</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp; 巨丰投顾郭一鸣认为，真正的救市，应该是保护投资者的主要利益，不要让亏损继续扩大，而也不能在纵容做空者继续通过做空获利。只有这样，市场信心才可能逐步恢复。当然，回过头来，政府大力救市，相信还会有更多措施出台，目前政策底较为明显，指数总体下行空间有限，指数随时止跌企稳。此处切不可随意割肉，一些低估值的蓝筹股可继续持有以及适当加仓，而高股指的创业板个股，继续谨防反弹出货风险。</p>\r\n\r\n<p>　　中信建投：千淘万漉虽辛苦，吹尽狂沙始到金。每次市场调整都是新的投资逻辑逐渐孕育的过程，从之前的&ldquo;杠杆牛&rdquo;到情绪平复后的&ldquo;改革牛&rdquo;，是一个重归理想的过程，也是一个估值体系重建的过程。沪深两市的市盈率已从高位滑落，回到了今年一季度末的水平。相对创业、中小板仍高达98倍和62倍的PE水平，<a href=\"http://finance.sina.com.cn/realstock/company/sz399300/nc.shtml\" target=\"_blank\">沪深300</a>(3998.537,&nbsp;112.62,&nbsp;2.90%)市盈率14.66倍，估值的安全边际开始体现。从A股的板块估值看，家电、煤炭、汽车、房地产、食品饮料估值占优。考虑到救市资金的投放标的集中在大盘蓝筹，我们认为接下来的市场演绎大概率的是蓝筹与成长背离行情，业绩确定、估值合理的蓝筹股票将是配置的重点。</p>\r\n\r\n<p>　　总体来讲，尽管近期的持续暴跌在历史上是较为罕见的，但同样政府高层、管理层以及市场各方的&ldquo;救市&rdquo;决心以及举措也是空前的。可以预期，急风暴雨式的下跌已告段落，而随着风险的集中释放以及组合利好的兑现，大盘有望再度迎来回升。(兴全)</p>\r\n\r\n<p>　　</p>\r\n\r\n<p>　　</p>\r\n', '2', '2015-07-06 12:10:38', '2015-07-06 12:09:17', null, '1', '0');
INSERT INTO `blogs` VALUES ('19', '李小琳本周将正式赴任大唐集团副总经理(图)', '<p><img alt=\"图为李小琳。（资料图）\" src=\"http://i1.sinaimg.cn/cj/2015/0706/U5547P31DT20150706180604.jpg\" />图为李小琳。（资料图）</p>\r\n\r\n<blockquote>\r\n<p>&nbsp;&nbsp;&nbsp; 【推荐阅读】</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp; <a href=\"http://finance.sina.com.cn/chanjing/rsbd/20150608/191922377573.shtml\" target=\"_blank\">媒体称李小琳出局国电投 调任大唐电力副总经理</a></p>\r\n</blockquote>\r\n\r\n<p>　　新浪财经讯 7月6日消息，在&ldquo;摔门&rdquo;说，&ldquo;边控&rdquo;说一时盛传之后，中电国际党组书记、董事长李小琳去向终于尘埃落定。新浪财经今日独家从消息人士处获知，李小琳已经 确定赴任大唐集团副总经理，&ldquo;如无意外，本周她会正式到大唐集团报到，并在本周四大唐集团年中工作会上亮相&rdquo;。</p>\r\n\r\n<p>　　中电投和国家核电重组完成后，作为原中电投集团的&ldquo;三号人物&rdquo;，李小琳的去向一直未明确，引发外界各种猜测。几乎与此同时，一些关于大唐集团、国家电网<a href=\"http://weibo.com/sgcc?zw=finance\" target=\"_blank\">[微博]</a>、南方电网等多家能源央企高层人事变动的流言也频频传出。局面一时扑朔迷离。</p>\r\n\r\n<p>　　众说纷纭中，李小琳在中电国际任上被公开报道的最后一次活动是6月18日露面中电国际&ldquo;三严三实&rdquo;专题党课，作了题为《践行&ldquo;三严三实&rdquo; 助力&ldquo;光明事业&rdquo;》的讲话。这本是央企领导的规定动作，但因为在此种微妙的时刻，在外界眼中也显得颇具深意。</p>\r\n\r\n<p>　　报道中称，&ldquo;据李小琳身边人透露，因其身份特殊，这已经不是李小琳第一次身处负面舆论漩涡。不同于以往在面对不利舆论时表现出的急于解释、辟谣甚至和媒体针锋相对，这次李小琳则表现出更多的大度、从容和自信&rdquo;。中电国际内部人士也否认了之前&ldquo;摔门&rdquo;，&ldquo;边控&rdquo;等消息。</p>\r\n\r\n<p>　　对于之前多家能源央企高层人事变动的流言，经求证多位业内消息人士，均表示有关传言无法证实，在企业没有接到进一步通知之前，不可妄猜。但此种情况不会持续太久，水落石出之日已经为时不远。</p>\r\n\r\n<p>　　对于&ldquo;一姐&rdquo;李小琳此次的工作变动，也有业内人士表示了一定程度的理解和同情。上述人士表示，业内外对此次人事变动的态度和反应，颇让人有世态炎凉之感。他认为，专业干部出身的李小琳，在电力行业工作了几十年，也确实做了很多实事。这些不能一概抹杀。</p>\r\n\r\n<p>　　目前大唐集团有三位副总经理，分别是邹嘉华、王森、金耀华，其中前两位为党组成员。消息人士表示，李小琳到任大唐集团副总经理后，排名不会太靠后，因为她资历确实也比较老。(新浪财经 刘丽丽 发自北京)</p>\r\n', '2', '2015-07-06 12:20:00', '2015-07-06 12:20:00', null, '0', '0');
INSERT INTO `blogs` VALUES ('20', '外交部回应土耳其反华示威游行:望土方谨言慎行', '<p>中新网7月6日电 外交部发言人华春莹6日主持例行记者会，就土耳其发生多起针对中国的游行示威、希腊债务问题等答记者问。</p>\r\n\r\n<p>　　<strong>以下是外交部网站公布的答问实录：</strong></p>\r\n\r\n<p>　　一、联合国第三次发展筹资国际会议将于7月13日至16日在埃塞俄比亚首都亚的斯亚贝巴举行，财政部部长楼继伟将作为习近平主席代表出席会议。</p>\r\n\r\n<p>　　二、应国务院总理李克强邀请，斐济共和国总理乔萨亚&middot;沃伦盖&middot;姆拜尼马拉马将于7月14日至24日对中国进行正式访问。</p>\r\n\r\n<p>　　三、应国家副主席李源潮邀请，南非共和国副总统西里尔&middot;拉马福萨将于7月13日至18日对中国进行正式访问。</p>\r\n\r\n<p>　　<strong>问：中国与东盟国家落实《南海各方行为宣言》第14次联合工作组会近日在马来西亚举行。请介绍会议有关情况和取得成果。</strong></p>\r\n\r\n<p>　　答：7月1日至3日，落实《南海各方行为宣言》第14次联合工作组会在马来西亚吉隆坡举行。会议以全面有效落实《宣言》为宗旨，在推进海上务实合作和&ldquo;南海行为准则&rdquo;磋商，以及落实早期收获计划方面取得了积极进展。会议制定了&ldquo;准则&rdquo;磋商第二份共识文件、名人专家小组《职责范围》以及&ldquo;中国和东盟国家应对海上紧急事态外交高官热线&rdquo;概念文件，并决定提交本月底举行的高官会审议。</p>\r\n\r\n<p>　　会议期间，各方还背靠背举行了&ldquo;航行安全与搜救&rdquo;专家和技术官员非正式会议，就落实&ldquo;中国和东盟国家海上搜救热线平台&rdquo;进行了深入探讨，决定建立中国和东盟各国搜救部门间的&ldquo;点对点热线联络&rdquo;，顺利完成了搜救热线平台第一阶段计划。各方还为&ldquo;中国和东盟国家海上搜救沙盘推演&rdquo;项目制定了执行方案，并商定今年10月在中国执行该项目。</p>\r\n\r\n<p>　　<strong>问：第一，</strong><strong>近日</strong><strong>土耳其</strong><strong>发生多起针对中国的游行示威</strong><strong>。</strong><strong>中</strong><strong>方是否就此与土方</strong><strong>交涉？第二，</strong><strong>据报道，事件起因</strong><strong>是有关中国政府禁止新疆穆斯林民众封斋等维族人问题的报道</strong><strong>。你是否认同这种说法？</strong></p>\r\n\r\n<p>　　答：关于你提到的这两个问题，我想一并作答。维吾尔族是中国56个民族大家庭的一员。生活在新疆的1000多万维吾尔族民众安居乐业，享有宪法规定的宗教信仰自由，根本不存在一些报道中提到的所谓新疆维族人问题。希望有关方面和人士不要无中生有，造谣诬蔑。</p>\r\n\r\n<p>　　我们对土耳其近日发生针对中国的暴力活动表示高度关切，已要求土方采取切实有力措施，保护中国在土公民和机构的安全和正当合法权益。我们要求土方尊重中国主权和领土完整，在有关问题上谨言慎行，与中方共同努力，维护中土关系的健康稳定发展。</p>\r\n\r\n<p>　　针对近日土耳其境内发生反华示威游行，一些在土中国游客受到袭扰，中国驻土耳其使领馆已提醒在土中国公民注意加强安全防范，切勿接近或拍摄游行队伍，尽量减少单独外出活动。如遇突发状况，请及时报警或联系驻土耳其使领馆寻求协助。</p>\r\n\r\n<p>　　<strong>问：昨天，希腊就是否接受债权人&ldquo;改革换资金&rdquo;协议举行全民公决。中方如何看待公投结果？中方是否对希腊留在欧元区有信心？是否与希腊政府就债务问题进行了沟通？</strong></p>\r\n\r\n<p>　　答：我们注意到了相关情况。当前，希腊债务问题处在关键时期，中方希望相关谈判尽早取得成功，愿意看到希腊留在欧元区。中方一贯支持欧洲一体化进程，乐见繁荣的欧洲、团结的欧盟、强大的欧元，我们相信欧元区能够妥善解决希债问题，渡过难关。我们将继续推进同希腊在各领域的双边务实合作。</p>\r\n\r\n<p>　　<strong>问：</strong><strong>伊朗核问题全面协议谈判正在维也纳举行。王毅外长是否将与会？中方对如期达成全面协议是否有信心？</strong></p>\r\n\r\n<p>　　答：外交部长王毅于今天凌晨赴维也纳出席伊朗核问题六国与伊外长会议。</p>\r\n\r\n<p>　　当前，六国与伊的谈判已经取得重要进展，同时还存在一些分歧。目前已经到各方作出政治决断的时候了。我们希望各方能够从大局着眼，坚定意愿，相向而行，尽快推动谈判达成协议。</p>\r\n\r\n<p>　　中方将继续发挥建设性作用，同各方一道努力，为推动伊核问题得到长期、全面、妥善解决作出积极贡献。</p>\r\n\r\n<p>　　<strong>问：</strong><strong>7月2日，已故印度援华医生柯棣华大夫的三妹马诺拉玛女士因心脏病发作去世。请问中方有何评论？</strong></p>\r\n\r\n<p>　　答：我们对马诺拉玛女士不幸逝世表示沉痛哀悼，对其亲属表示诚挚慰问。马诺拉玛女士去世后，中国驻印度大使即向其亲属致慰问电，中国驻孟买总领事第一时间前往马诺拉玛女士家中表示慰问。</p>\r\n\r\n<p>　　柯棣华大夫和马诺拉玛女士是中国人民的伟大朋友，为支援中国人民反法西斯战争和促进中印友好事业作出了重要贡献。中国人民将永远缅怀他们。我们相信柯棣华大夫的国际主义精神将影响和带动更多人投身到促进中印友好的伟大事业中来。</p>\r\n\r\n<p>　　<strong>问：</strong><strong>第一，中国和马来西亚最近是否就南海问题进行过讨论？第二，中投公司是否获得授权购买马来西亚的资产？是否会得到马方的投资优惠？</strong><strong>中马双方是否就马来西亚的债务问题进行磋商？</strong></p>\r\n\r\n<p>　　答：关于第一个问题，长期以来，中马双方按照两国领导人达成的共识就有关问题保持着沟通，积极维护地区和平稳定。</p>\r\n\r\n<p>　　关于第二个问题，我不掌握有关情况。中投公司完全是基于商业原则自行决定境外投资项目。</p>\r\n\r\n<p>　　<strong>问：据报道，</strong><strong>希拉里</strong><strong>&middot;克林顿近日在竞选活动中就</strong><strong>中国在南海行动</strong><strong>以及</strong><strong>网络攻击问题发表了消极言论</strong><strong>。中方</strong><strong>对此有何评论？</strong></p>\r\n\r\n<p>　　答：我们注意到有关报道。中方已经多次阐明了在网络安全和南海等问题上的原则立场。</p>\r\n\r\n<p>　　我想说的是，大家都很清楚，中美关系的发展历程表明，中美关系的重要性始终有增无减。中美双方以建设性的精神和方式加强对话与合作，共同应对各种挑战，符合中美两国利益，也有利于世界和地区的和平与繁荣。</p>\r\n\r\n<p>　　<strong>问：</strong><strong>据了解，中国政府已正式提名金立群为亚投行候任行长中方候选人。你能否证实？</strong></p>\r\n\r\n<p>　　答：根据2015年6月29日在北京举行的亚投行特别财长会通过的亚投行候任行长遴选程序，中国政府已正式提名金立群为亚投行候任行长中方候选人。</p>\r\n\r\n<p>　　金立群具有在政府部门、国际机构和私营部门丰富的领导和管理经验，目前担任亚投行筹建多边临时秘书处秘书长，为筹建亚投行做出了突出贡献。</p>\r\n\r\n<p>　　《亚投行协定》规定，应通过公开、透明和择优的程序选举行长，行长应来自域内成员。根据各方共同商定的候任行长遴选程序，意向创始成员国须在2015年7月31日前提名候选人，之后将在2015年8月下旬举行的第六次首席谈判代表会议上确定候任行长人选。亚投行正式成立后，将在首次理事会上根据《亚投行协定》有关规定，将候任行长选举为行长。</p>\r\n\r\n<p>　　<strong>问：据报道，马英九表示国民党在抗日战争中起了主导作用。你对此事有何看法？你认为是共产党还是国民党在抗日战争中起了决定性作用？</strong></p>\r\n\r\n<p>　　答：中国人民抗日战争的胜利是中华民族全体儿女浴血奋战取得的胜利，这个胜利值得中华民族全体儿女共同来纪念和铭记。</p>\r\n\r\n<p>　　最近，国务院新闻办公室召开新闻发布会，有关部门负责人介绍了中国人民抗日战争暨世界反法西斯战争胜利70周年纪念活动的具体安排。我们希望通过举办这些活动，来和世界人民一起铭记历史、缅怀先烈、珍爱和平、开创未来。</p>\r\n\r\n<p>　　<strong>问：</strong><strong>第39届联合国教科文组织世界遗产委员会会议审议通过将日本&ldquo;明治工业革命遗址&rdquo;列入世界遗产名录。你对此有何评论？</strong></p>\r\n\r\n<p>　　答：世界遗产委员会会议审议并通过日本&ldquo;明治工业革命遗址&rdquo;列入世界遗产名录。中方注意到，日本在审议发言时承认，部分遗址实施了强制劳役的事实；日本政府在二战期间执行了征用劳工的政策；日本政府承诺采取适当措施，铭记强制劳工政策的受害者。世界遗产委员会将日本上述声明记录在案。日方应以实际行动取信于亚洲邻国和国际社会。</p>\r\n\r\n<p>　　<strong>问：</strong><strong>据报道，日本与湄公河流域国家峰会4日通过名为《新东京战略2015》的共同文件，其中对南海局势表示关切。中方对此有何评论？</strong></p>\r\n\r\n<p>　　答：当前，在中国和有关东盟国家的共同努力下，南海局势总体稳定，各国依国际法在南海享有的航行和飞越自由没有受到任何影响。</p>\r\n\r\n<p>　　中方注意到，日本近期在南海问题上跳得很高，为一己之私不停渲染地区局势紧张，绑架和挑拨地区国家关系，干扰中国和东盟国家维护南海和平的努力。日本不是南海问题的当事方，我们敦促日方停止炒作南海问题，停止攻击抹黑中国，以实际行动维护地区和平稳定。</p>\r\n\r\n<p>(原标题：外交部就土耳其反华示威游行、希腊公投等答问)</p>\r\n\r\n<p>编辑：SN123</p>\r\n\r\n<p><strong>更多猛料！欢迎扫描下方二维码关注新浪新闻官方微信(xinlang-xinwen)。</strong></p>\r\n\r\n<p><img alt=\"新浪新闻\" src=\"http://i3.sinaimg.cn/dy/main/other/qrcode_news.jpg\" /></p>\r\n', '2', '2015-07-06 12:20:47', '2015-07-06 12:20:47', null, '0', '0');
INSERT INTO `blogs` VALUES ('21', '中新网7月6日电 外交部', '<p>&nbsp;</p>\r\n\r\n<p><img alt=\"栗智\" src=\"http://i2.sinaimg.cn/dy/c/2015-07-06/U2004P1T1D32077363F21DT20150706110707.jpg\" /> 栗智</p>\r\n\r\n<p>　　日前，经中共中央批准，中共中央纪委对新疆维吾尔自治区人大常委会原副主任、党组成员<a href=\"http://news.sina.com.cn/c/2015-03-11/145731594706.shtml\" target=\"_blank\">栗智严重违纪问题进行了立案审查</a>。</p>\r\n\r\n<p>　　经查，栗智严重违反纪律，档案造假，向组织隐瞒本人真实年龄；严重违反廉洁自律规定，收受礼金；利用职务上的便利在干部选拔任用、企业经营等方 面为他人谋取利益，索取、收受巨额贿赂；严重违反社会主义道德，与他人通奸；干扰、妨碍组织审查，转移、藏匿赃款赃物。其中，受贿问题涉嫌犯罪。</p>\r\n\r\n<p>　　栗智身为党的高级领导干部，严重违反党的政治规矩和组织纪律，严重违纪违法，且党的十八大后仍不收敛、不收手，性质恶劣、情节严重。依据《中国 共产党纪律处分条例》等有关规定，经中央纪委审议并报中共中央批准，决定给予栗智开除党籍处分；收缴其违纪所得；将其涉嫌犯罪问题、线索及所涉款物移送司 法机关依法处理。</p>\r\n\r\n<p>　　<strong>栗智简历</strong></p>\r\n\r\n<p>　　栗智，男，汉族，1950年11月生，安徽利辛人，1971年3月加入中国共产党，1969年12月参加工作，新疆大学经济系经济管理专业研究生课程进修班毕业，在职研究生学历，高级经济师。</p>\r\n\r\n<p>　　1977年10月从南充师范学院生物系生物专业毕业后，栗智曾长期在新疆维吾尔自治区轻工系统工作，1996年任自治区轻工厅副厅长。</p>\r\n\r\n<p>　　2000年7月，栗智离开轻工系统，调任昌吉回族自治州党委副书记。后历任博尔塔拉蒙古自治州党委书记、新疆生产建设兵团农五师党委第一书记、 第一政委；乌昌党委副书记、昌吉回族自治州党委书记；乌昌党委副书记、昌吉回族自治州党委书记，新疆生产建设兵团农六师党委第一书记、第一政委等职。</p>\r\n\r\n<p>　　2006年11月，栗智升任乌昌党委书记，乌鲁木齐市委书记，新疆生产建设兵团农十二师党委第一书记、第一政委。他还是第十届全国人大代表。</p>\r\n\r\n<p>　　2008年1月至2013年1月，栗智任新疆维吾尔自治区第十一届人大常委会副主任。据新疆人大信息网</p>\r\n\r\n<p>(原标题：新疆维吾尔自治区人大常委会原副主任、党组成员栗智严重违纪违法被开除党籍)</p>\r\n\r\n<p>编辑：SN054</p>\r\n\r\n<p><strong>更多猛料！欢迎扫描下方二维码关注新浪新闻官方微信(xinlang-xinwen)。</strong></p>\r\n\r\n<p><img alt=\"新浪新闻\" src=\"http://i3.sinaimg.cn/dy/main/other/qrcode_news.jpg\" /></p>\r\n', '2', '2015-07-06 12:22:45', '2015-07-06 12:22:45', null, '0', '0');
INSERT INTO `blogs` VALUES ('22', '人、赛道和产品都很重要', '<h2>面孔</h2>\r\n\r\n<h3><a href=\"http://finance.sina.com.cn/roll/20150604/084822346196.shtml\" target=\"_blank\">人、赛道和产品都很重要</a></h3>\r\n\r\n<p>洪泰基金创始人盛希泰在接受新浪财经独家专访时表示，天使投资阶段看项目时，人、赛道和产品三个因素都很重要。看人是前提，是预防措施；赛道是市场空间，没有未来的项目不会投；产品是指在赛道里具体做什么，特质是什么，怎样去执行。&ldquo;这三个因素都很重要，机遇、执行也很重要。&rdquo;</p>\r\n\r\n<p>标准一</p>\r\n\r\n<h2><a href=\"http://finance.sina.com.cn/roll/20150604/084822346196.shtml#5\" target=\"_blank\">看赛道</a></h2>\r\n\r\n<p>天使投资要加一点PE思维，要看赛道，市场空间很小，没有未来的项目不能投。</p>\r\n\r\n<p>标准二</p>\r\n\r\n<h2><a href=\"http://finance.sina.com.cn/roll/20150604/084822346196.shtml#6\" target=\"_blank\">看产品</a></h2>\r\n\r\n<p>在这个赛道里面你具体做什么产品，你的特质是什么，你怎么去执行，对创业也很重要。</p>\r\n\r\n<p>表情</p>\r\n\r\n<p><a href=\"http://finance.sina.com.cn/roll/20150604/084822346196.shtml\" target=\"_blank\">关于天使投资 &gt;</a></p>\r\n\r\n<p><a href=\"http://finance.sina.com.cn/roll/20150604/084822346196.shtml#1\" target=\"_blank\"><img alt=\"离开是为了换一种活法\" src=\"http://i0.sinaimg.cn/cj/focus/idx/2015/0605/U12164P31T999D1F29324DT20150605084003.jpeg\" /></a></p>\r\n\r\n<h3><a href=\"http://finance.sina.com.cn/roll/20150604/084822346196.shtml#1\" target=\"_blank\">离开是为了换一种活法</a></h3>\r\n\r\n<p>当时天花板已经有了，换个公司还是一样，我的比方就是，都是卖猪肉，卖10斤还是卖50斤的问题，本质没有区别。</p>\r\n\r\n<p><a href=\"http://finance.sina.com.cn/roll/20150604/084822346196.shtml#2\" target=\"_blank\"><img alt=\"未来8年将有更伟大的造富运动\" src=\"http://i0.sinaimg.cn/cj/focus/idx/2015/0605/U12164P31T999D1F29325DT20150605084003.jpg\" /></a></p>\r\n\r\n<h3><a href=\"http://finance.sina.com.cn/roll/20150604/084822346196.shtml#2\" target=\"_blank\">未来8年将有更伟大的造富运动</a></h3>\r\n\r\n<p>创业是现在最大的大势。我觉得从今年开始，2015年到2022年应该是更伟大的造富运动，也是中华民族彻底颠覆的一个机会。</p>\r\n\r\n<p><a href=\"http://finance.sina.com.cn/roll/20150604/084822346196.shtml\" target=\"_blank\"><img alt=\"洪泰基金创始人盛希泰\" src=\"http://i3.sinaimg.cn/cj/focus/idx/2015/0605/U11916P31T999D1F29326DT20150605140251.jpg\" /></a></p>\r\n\r\n<h3><a href=\"http://finance.sina.com.cn/roll/20150604/084822346196.shtml\" target=\"_blank\">洪泰基金创始人盛希泰</a></h3>\r\n\r\n<p>盛希泰，著名天使投资人，洪泰基金创始人。前证券公司董事长，资深投资银行家。清华大学水木清华种子基金管理合伙人，南开允能创业商学院理事长。&nbsp;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;洪泰基金投资项目包括：中国原创搏击品牌&ldquo;昆仑决&rdquo;、医护陪诊平台&ldquo;e陪诊&rdquo;、免息分期服务平台&ldquo;优优宝&rdquo;、按摩O2O&ldquo;富侨上门&rdquo;和专业胎教连锁机构&ldquo;悦迪胎教&rdquo;等。</p>\r\n\r\n<p><a href=\"http://finance.sina.com.cn/roll/20150604/084822346196.shtml#4\" target=\"_blank\"><img alt=\"我和俞敏洪“恋爱”很多年了\" src=\"http://i2.sinaimg.cn/cj/focus/idx/2015/0605/U12164P31T999D1F29327DT20150605084003.jpg\" /></a></p>\r\n\r\n<h3><a href=\"http://finance.sina.com.cn/roll/20150604/084822346196.shtml#4\" target=\"_blank\">我和俞敏洪&ldquo;恋爱&rdquo;很多年了</a></h3>\r\n\r\n<p>我们&ldquo;恋爱&rdquo;一二十年了已经，但&ldquo;闪婚&rdquo;很偶然。他还是文质彬彬的更多一点，内心可能很狼，但表现的不是狼，我表现的比较土豪吧。</p>\r\n\r\n<p><a href=\"http://finance.sina.com.cn/roll/20150604/084822346196.shtml#3\" target=\"_blank\"><img alt=\"做天使就是转为屌丝重新开始\" src=\"http://i3.sinaimg.cn/cj/focus/idx/2015/0605/U12164P31T999D1F29328DT20150605084003.jpg\" /></a></p>\r\n', '2', '2015-07-06 12:24:14', '2015-07-06 12:24:14', null, '0', '0');

-- ----------------------------
-- Table structure for comments
-- ----------------------------
DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(255) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `sender_id` int(11) DEFAULT NULL,
  `receiver_id` int(11) DEFAULT '0',
  `blog_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comment_sender` (`sender_id`),
  KEY `comment_receiver` (`receiver_id`),
  KEY `comments_parent` (`parent_id`)
) ENGINE=MyISAM AUTO_INCREMENT=268 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of comments
-- ----------------------------
INSERT INTO `comments` VALUES ('257', '你好啊', '0', '2015-07-06 12:10:03', '2015-07-06 12:10:03', null, '2', '0', '18');
INSERT INTO `comments` VALUES ('258', '00(3998.537, 112.62, 2.90%)市盈率14.66倍，估值的安全边际开始体现。从A股的板块估值看，家电、煤炭、汽车、房地产、食品饮料估值占优。考虑到救市资金的投放标的集中在大盘蓝筹，我们认为接下来的市场演绎大概率的是蓝筹与成长背离行情，业绩确定、估值合理的蓝筹股票将是配置的重点。\n\n　　总体来举措也是空前的。可以预期，急风暴雨式的下跌已告段落，而随着风险的集中释放以及组合利好的兑现，大盘有望再度迎来回升。(兴全)', '0', '2015-07-06 12:10:11', '2015-07-06 12:10:11', null, '2', '0', '18');
INSERT INTO `comments` VALUES ('259', '量方面，沪市成交9434.20 亿元，深市成交6090.84亿元，两市共成交15 525.04 亿元。两市成交量较上一交易日明显放大。', '0', '2015-07-06 12:10:21', '2015-07-06 12:10:21', null, '2', '0', '18');
INSERT INTO `comments` VALUES ('260', '最多输入255个字符412412412', '259', '2015-07-06 12:10:49', '2015-07-06 12:10:49', null, '8', '2', '18');
INSERT INTO `comments` VALUES ('261', '示，国家已出手，众志已成城，无论是资金，还是政策，开始向有利于多方转移，国家决心、政策支持、资金转向、技术背离、市场舆论五点共振，此时做空要远比做多风险大，本周大盘有望阳线报收。操作上，不做空，不追高，重仓', '0', '2015-07-06 12:11:01', '2015-07-06 12:11:01', null, '8', '0', '18');
INSERT INTO `comments` VALUES ('262', '　　后市展望\n\n　　方正证券(11.52, 0.83, 7.76%)表示，国家已出手，众志已成城，无论是资金，还是政策，开始向有利于多方转移，国家决心、政策支持、资金转向、技术背离、市场舆论五点共振，此时做空要远比做多风险大，本周大盘有望阳线报收。操作上，不做空，\n', '0', '2015-07-06 12:11:09', '2015-07-06 12:11:09', null, '8', '0', '18');
INSERT INTO `comments` VALUES ('263', '重股低迷，题材股盘中再现跌停潮，盘中中国石油(13.01, 1.18, 9.97%)、银行、券商等大盘蓝筹股护盘明显，涨幅均在7%以上，临近尾盘沪指震荡走高，全天振幅达8.74%。两市逾900股跌停，仅仅55只个股涨停。\n\n\n　　板块方面，银行、保险、证券涨幅靠前，航空制造、通信设备、互联网、国产软件、智能机器跌逾6%\n', '0', '2015-07-06 12:11:22', '2015-07-06 12:11:22', null, '8', '0', '18');
INSERT INTO `comments` VALUES ('264', '联网、国产软件、智能机器跌逾6% ', '263', '2015-07-06 12:11:34', '2015-07-06 12:11:34', null, '8', '8', '18');
INSERT INTO `comments` VALUES ('265', '3124124', '264', '2015-07-06 12:11:54', '2015-07-06 12:11:54', null, '2', '8', '18');
INSERT INTO `comments` VALUES ('266', '3123123', '265', '2015-07-06 12:12:01', '2015-07-06 12:12:01', null, '2', '2', '18');
INSERT INTO `comments` VALUES ('267', '，真正的救市，应该是保护投资者的主要利益，不要让亏损继续扩大，而也不能在纵容做空者继续通过做空获利。只有这样，市场信心才可能逐步恢复。当然，回过头来，\n　　中信建投：千淘万漉虽辛苦，吹尽狂沙始到金。每次市场调整都是新的投资逻辑逐渐孕育的过程，从之前的“杠杆牛”到情绪平复后的“改革牛”，是一个重归理想的过程，也是一个估值体系重建的过程。沪深两市的市盈率已从高', '0', '2015-07-06 12:12:20', '2015-07-06 12:12:20', null, '2', '0', '18');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(32) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  UNIQUE KEY `email` (`email`),
  KEY `token` (`token`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for register_codes
-- ----------------------------
DROP TABLE IF EXISTS `register_codes`;
CREATE TABLE `register_codes` (
  `email` varchar(32) NOT NULL,
  `code` varchar(6) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  UNIQUE KEY `email` (`email`),
  KEY `code` (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of register_codes
-- ----------------------------
INSERT INTO `register_codes` VALUES ('929936389@qq.com', 'FSwtDI', '2015-07-06 19:58:10');
INSERT INTO `register_codes` VALUES ('9299236389@qq.com', 'aIXJBu', '2015-07-06 19:59:26');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `name` varchar(16) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `type` tinyint(4) NOT NULL,
  `remember_token` varchar(64) DEFAULT NULL,
  `portrait` varchar(255) DEFAULT NULL,
  `visits` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('2', '929936389@qq.com', '$2y$10$OP4TRG/FhlipjQlFOvBWue7XHwDvEFUacYepLUpIr.0pnseD8.au6', 'coder_wmj', '2015-07-05 04:12:33', '2015-07-06 11:57:47', null, '0', 'NE754DApuAwIarmZ8MBR48IBvEhJ0GttGEaNZXFjSWAfUBIxtFuBnCXs8JQX', null, '37');
INSERT INTO `users` VALUES ('8', '406435735@qq.com', '$2y$10$B.lI7qsxkF3IOvzlK6rx2OO1ZPr7BvjZhWi9B/8rwOJTe0prUEoz6', 'ASPRazor', '2015-07-05 04:30:02', '2015-07-06 03:59:13', null, '0', 'lRbUD8ECgGCJWw33O0LDWK7CSjoOnQdjVgIMncxCrqboVJdN6B5jJUvzFwRH', '/image/blog/595eb9eab7e2c6c60f075498aa3a1e17.png', '16');
