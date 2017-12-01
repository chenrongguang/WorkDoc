/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50547
Source Host           : localhost:3306
Source Database       : ai_business

Target Server Type    : MYSQL
Target Server Version : 50547
File Encoding         : 65001

Date: 2017-12-01 10:38:14
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `ai_app_info`
-- ----------------------------
DROP TABLE IF EXISTS `ai_app_info`;
CREATE TABLE `ai_app_info` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '自增',
  `appKey` varchar(50) DEFAULT NULL,
  `appSecret` varchar(100) DEFAULT NULL,
  `productName` varchar(100) DEFAULT NULL COMMENT ' 产品名称',
  `call_url` varchar(255) DEFAULT NULL,
  `use_yn` varchar(2) DEFAULT 'Y' COMMENT '是否可用',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='app基础信息表';

-- ----------------------------
-- Records of ai_app_info
-- ----------------------------
INSERT INTO `ai_app_info` VALUES ('1', '4938940', 'q5HFMs0ZsE3', 'AI运营-商品智能重发', 'http://local.aibusiness.com/gdr/index/index', 'Y');

-- ----------------------------
-- Table structure for `ai_app_order`
-- ----------------------------
DROP TABLE IF EXISTS `ai_app_order`;
CREATE TABLE `ai_app_order` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `bizStatusExt` varchar(100) DEFAULT NULL COMMENT '订单详细状态 audit_pass:审核通过，issue_ready：待发布，service：服务中，suspend：挂起 arrear_suspend：欠费挂起，closed：关闭，cancel：作废',
  `memberId` varchar(50) DEFAULT NULL COMMENT '会员memberId',
  `productName` varchar(100) DEFAULT NULL COMMENT '产品名称',
  `gmtCreate` datetime DEFAULT NULL COMMENT '下单时间 20130509120000000+0800',
  `gmtServiceEnd` datetime DEFAULT NULL COMMENT '到期时间 20130509120000000+0800',
  `bizStatus` varchar(50) DEFAULT NULL COMMENT '订单状态 B:服务前，S:服务中，P：挂起，E：关闭，C:作废',
  `paymentAmount` double DEFAULT NULL COMMENT '到帐金额',
  `executePrice` double DEFAULT NULL COMMENT '执行金额',
  `create_time` datetime DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='app会员订购关系表';

-- ----------------------------
-- Records of ai_app_order
-- ----------------------------

-- ----------------------------
-- Table structure for `ai_auth`
-- ----------------------------
DROP TABLE IF EXISTS `ai_auth`;
CREATE TABLE `ai_auth` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `aliId` varchar(100) DEFAULT NULL COMMENT '阿里巴巴集团统一的id',
  `resource_owner` varchar(50) DEFAULT NULL COMMENT '登录id',
  `memberId` varchar(50) DEFAULT NULL COMMENT '会员接口id',
  `expires` datetime DEFAULT NULL COMMENT 'access_token过期时间，单位秒',
  `refresh_token` varchar(100) DEFAULT NULL COMMENT 'refresh_token',
  `access_token` varchar(100) DEFAULT NULL COMMENT 'access_token',
  `refresh_token_timeout` datetime DEFAULT NULL COMMENT 'refreshToken的过期时间 例子 20121222222222+0800',
  `app_key` varchar(500) DEFAULT NULL COMMENT 'app_key',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='用户授权信息表';

-- ----------------------------
-- Records of ai_auth
-- ----------------------------
INSERT INTO `ai_auth` VALUES ('1', '3162969548', '晨曦银饰厂', 'b2b-316296954882808', '2017-11-29 05:51:11', 'b3dee8b6-f812-459a-9a67-3b115a424799', '5b34e208-a883-403f-9ff4-764b75a3c11f', '2018-05-07 11:15:46', '4938940');

-- ----------------------------
-- Table structure for `ai_bus_productresend_detail`
-- ----------------------------
DROP TABLE IF EXISTS `ai_bus_productresend_detail`;
CREATE TABLE `ai_bus_productresend_detail` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `plan_uuid` varchar(36) DEFAULT NULL COMMENT '重发计划',
  `memberId` varchar(50) DEFAULT NULL COMMENT '会员memberId',
  `plan_date` date DEFAULT NULL COMMENT '重发日期',
  `productID` bigint(20) DEFAULT NULL COMMENT '商品ID',
  `resend_time` datetime DEFAULT NULL COMMENT '重发时间',
  `create_time` datetime DEFAULT NULL COMMENT '记录生成时间',
  `result` varchar(10) DEFAULT NULL COMMENT '重发结果',
  `desc` varchar(500) DEFAULT NULL COMMENT '失败原因描述',
  `subErrorCode` varchar(50) DEFAULT NULL COMMENT '错误码',
  `subErrorMessage` varchar(1000) DEFAULT NULL COMMENT '错误信息',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='业务-商品重发明细（日志）';

-- ----------------------------
-- Records of ai_bus_productresend_detail
-- ----------------------------

-- ----------------------------
-- Table structure for `ai_bus_productresend_exclude`
-- ----------------------------
DROP TABLE IF EXISTS `ai_bus_productresend_exclude`;
CREATE TABLE `ai_bus_productresend_exclude` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `plan_uuid` varchar(36) DEFAULT NULL COMMENT '生成UUID',
  `memberId` varchar(50) DEFAULT NULL COMMENT '会员memberId',
  `use_yn` varchar(2) DEFAULT 'Y' COMMENT '是否可用',
  `create_time` datetime DEFAULT NULL,
  `productID` bigint(20) DEFAULT NULL COMMENT '商品ID',
  `productUrl` varchar(500) DEFAULT NULL COMMENT '商品url',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='业务-商品重发-排除重发的商品明细';

-- ----------------------------
-- Records of ai_bus_productresend_exclude
-- ----------------------------

-- ----------------------------
-- Table structure for `ai_bus_productresend_plan`
-- ----------------------------
DROP TABLE IF EXISTS `ai_bus_productresend_plan`;
CREATE TABLE `ai_bus_productresend_plan` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `plan_uuid` varchar(36) DEFAULT NULL COMMENT '生成UUID',
  `plan_name` varchar(50) DEFAULT NULL COMMENT '计划名称',
  `memberId` varchar(50) DEFAULT NULL COMMENT '会员memberId',
  `use_yn` varchar(2) DEFAULT 'Y' COMMENT '是否可用',
  `create_time` datetime DEFAULT NULL,
  `status` int(11) DEFAULT '1' COMMENT '启用状态：默认1启用，0未启用',
  `plan0` smallint(6) DEFAULT '0' COMMENT '时间段0-0:59，选择了未1，未选择为0',
  `plan1` smallint(6) DEFAULT '0' COMMENT '时间段1-1:59，选择了未1，未选择为0',
  `plan2` smallint(6) DEFAULT '0' COMMENT '时间段2-2:59，选择了未1，未选择为0',
  `plan3` smallint(6) DEFAULT '0' COMMENT '时间段3-3:59，选择了未1，未选择为0',
  `plan4` smallint(6) DEFAULT '0' COMMENT '时间段4-4:59，选择了未1，未选择为0',
  `plan5` smallint(6) DEFAULT '0' COMMENT '时间段5-5:59，选择了未1，未选择为0',
  `plan6` smallint(6) DEFAULT '0' COMMENT '时间段6-6:59，选择了未1，未选择为0',
  `plan7` smallint(6) DEFAULT '0' COMMENT '时间段7-7:59，选择了未1，未选择为0',
  `plan8` smallint(6) DEFAULT '0' COMMENT '时间段8-8:59，选择了未1，未选择为0',
  `plan9` smallint(6) DEFAULT '0' COMMENT '时间段9-9:59，选择了未1，未选择为0',
  `plan10` smallint(6) DEFAULT '0' COMMENT '时间段10-10:59，选择了未1，未选择为0',
  `plan11` smallint(6) DEFAULT '0' COMMENT '时间段11-11:59，选择了未1，未选择为0',
  `plan12` smallint(6) DEFAULT '0' COMMENT '时间段12-12:59，选择了未1，未选择为0',
  `plan13` smallint(6) DEFAULT '0' COMMENT '时间段13-13:59，选择了未1，未选择为0',
  `plan14` smallint(6) DEFAULT '0' COMMENT '时间段14-14:59，选择了未1，未选择为0',
  `plan15` smallint(6) DEFAULT '0' COMMENT '时间段15-15:59，选择了未1，未选择为0',
  `plan16` smallint(6) DEFAULT '0' COMMENT '时间段16-16:59，选择了未1，未选择为0',
  `plan17` smallint(6) DEFAULT '0' COMMENT '时间段17-17:59，选择了未1，未选择为0',
  `plan18` smallint(6) DEFAULT '0' COMMENT '时间段18-18:59，选择了未1，未选择为0',
  `plan19` smallint(6) DEFAULT '0' COMMENT '时间段19-19:59，选择了未1，未选择为0',
  `plan20` smallint(6) DEFAULT '0' COMMENT '时间段20-20:59，选择了未1，未选择为0',
  `plan21` smallint(6) DEFAULT '0' COMMENT '时间段21-21:59，选择了未1，未选择为0',
  `plan22` smallint(6) DEFAULT '0' COMMENT '时间段22-22:59，选择了未1，未选择为0',
  `plan23` smallint(6) DEFAULT '0' COMMENT '时间段23-23:59，选择了未1，未选择为0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='业务-商品重发计划';

-- ----------------------------
-- Records of ai_bus_productresend_plan
-- ----------------------------

-- ----------------------------
-- Table structure for `ai_login_member`
-- ----------------------------
DROP TABLE IF EXISTS `ai_login_member`;
CREATE TABLE `ai_login_member` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `loginId` varchar(100) DEFAULT NULL COMMENT '登录id',
  `memberId` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='会员与登录人的对应关系表';

-- ----------------------------
-- Records of ai_login_member
-- ----------------------------

-- ----------------------------
-- Table structure for `ai_member_info`
-- ----------------------------
DROP TABLE IF EXISTS `ai_member_info`;
CREATE TABLE `ai_member_info` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `loginId` varchar(100) DEFAULT NULL,
  `sex` varchar(50) DEFAULT NULL,
  `isMobileVerify` varchar(10) DEFAULT NULL,
  `isMobileBind` varchar(10) DEFAULT NULL,
  `isEmailBind` varchar(10) DEFAULT NULL,
  `isEnterpriseTP` varchar(10) DEFAULT NULL,
  `isMarketTP` varchar(10) DEFAULT NULL,
  `trustScore` varchar(10) DEFAULT NULL,
  `isPersonalTP` varchar(10) DEFAULT NULL,
  `industry` varchar(100) DEFAULT NULL,
  `isDistribution` varchar(10) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `sellerName` varchar(100) DEFAULT NULL,
  `havePrecharge` varchar(20) DEFAULT NULL,
  `companyName` varchar(100) DEFAULT NULL,
  `product` varchar(200) DEFAULT NULL,
  `haveSite` varchar(10) DEFAULT NULL,
  `haveDistribution` varchar(10) DEFAULT NULL,
  `lastLogin` datetime DEFAULT NULL,
  `isETCTP` varchar(10) DEFAULT NULL,
  `isPrecharge` varchar(10) DEFAULT NULL,
  `isEmailVerify` varchar(10) DEFAULT NULL,
  `memberId` varchar(50) DEFAULT NULL,
  `verifyStatus` varchar(50) DEFAULT NULL,
  `isTP` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='会员信息表';

-- ----------------------------
-- Records of ai_member_info
-- ----------------------------

-- ----------------------------
-- Table structure for `ai_product`
-- ----------------------------
DROP TABLE IF EXISTS `ai_product`;
CREATE TABLE `ai_product` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `productID` bigint(20) DEFAULT NULL COMMENT '商品ID',
  `productType` varchar(50) DEFAULT NULL COMMENT '商品类型，在线批发商品(wholesale)或者询盘商品(sourcing)，1688网站缺省为wholesale',
  `categoryID` bigint(20) DEFAULT NULL COMMENT '类目ID，标识商品所属类目',
  `groupID` bigint(20) DEFAULT NULL COMMENT '分组ID，确定商品所属分组。1688可传入多个分组ID，国际站同一个商品只能属于一个分组，因此默认只取第一个',
  `status` varchar(50) DEFAULT NULL COMMENT '商品状态。auditing：审核中；online：已上网；FailAudited：审核未通过；outdated：已过期；member delete(d)：用户删除；delete：审核删除；published 已发布。此状态为系统内部控制，外部无法修改。',
  `subject` varchar(500) DEFAULT NULL COMMENT '商品标题，最多128个字符',
  `description` longtext COMMENT '商品详情描述，可包含图片中心的图片URL',
  `language` varchar(500) DEFAULT NULL COMMENT '语种，参见FAQ 语种枚举值，1688网站默认传入CHINESE',
  `periodOfValidity` bigint(20) DEFAULT NULL COMMENT '信息有效期，按天计算，国际站无此信息',
  `bizType` int(11) DEFAULT NULL COMMENT '业务类型。1：商品，2：加工，3：代理，4：合作，5：商务服务。国际站按默认商品。',
  `pictureAuth` varchar(10) DEFAULT NULL COMMENT '是否图片私密信息，国际站此字段无效',
  `createTime` datetime DEFAULT NULL COMMENT '创建时间',
  `lastUpdateTime` datetime DEFAULT NULL COMMENT '最后修改时间',
  `lastRepostTime` datetime DEFAULT NULL COMMENT '最近重发时间，国际站无此信息',
  `approvedTime` datetime DEFAULT NULL COMMENT '审核通过时间，国际站无此信息',
  `expireTime` datetime DEFAULT NULL COMMENT '过期时间，国际站无此信息',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='商品信息主表';

-- ----------------------------
-- Records of ai_product
-- ----------------------------

-- ----------------------------
-- Table structure for `ai_product_attr`
-- ----------------------------
DROP TABLE IF EXISTS `ai_product_attr`;
CREATE TABLE `ai_product_attr` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `productID` bigint(20) DEFAULT NULL COMMENT '商品ID',
  `attributeID` bigint(20) DEFAULT NULL COMMENT '属性ID',
  `attributeName` varchar(500) DEFAULT NULL COMMENT '属性名称',
  `valueID` bigint(20) DEFAULT NULL COMMENT '属性值ID',
  `value` varchar(2000) DEFAULT NULL COMMENT '属性值',
  `isCustom` varchar(10) DEFAULT NULL COMMENT '是否为自定义属性，国际站无需关注',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='商品-属性和属性值表';

-- ----------------------------
-- Records of ai_product_attr
-- ----------------------------

-- ----------------------------
-- Table structure for `ai_product_extendinfo`
-- ----------------------------
DROP TABLE IF EXISTS `ai_product_extendinfo`;
CREATE TABLE `ai_product_extendinfo` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `productID` bigint(20) DEFAULT NULL COMMENT '商品ID',
  `key` varchar(500) DEFAULT NULL COMMENT '扩展结构的key',
  `value` text,
  `createTime` datetime DEFAULT NULL COMMENT '创建时间',
  `lastUpdateTime` datetime DEFAULT NULL COMMENT '最后修改时间',
  `lastRepostTime` datetime DEFAULT NULL COMMENT '最近重发时间，国际站无此信息',
  `approvedTime` datetime DEFAULT NULL COMMENT '审核通过时间，国际站无此信息',
  `expireTime` datetime DEFAULT NULL COMMENT '过期时间，国际站无此信息',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='商品-扩展信息';

-- ----------------------------
-- Records of ai_product_extendinfo
-- ----------------------------

-- ----------------------------
-- Table structure for `ai_product_image`
-- ----------------------------
DROP TABLE IF EXISTS `ai_product_image`;
CREATE TABLE `ai_product_image` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `productID` bigint(20) DEFAULT NULL COMMENT '商品ID',
  `images` text COMMENT '主图列表，需先使用图片上传接口上传图片',
  `isWatermark` varchar(10) DEFAULT NULL COMMENT '是否打水印，是(true)或否(false)，1688无需关注此字段，1688的水印信息在上传图片时处理',
  `isWatermarkFrame` varchar(10) DEFAULT NULL COMMENT '水印是否有边框，有边框(true)或者无边框(false)，1688无需关注此字段，1688的水印信息在上传图片时处理',
  `watermarkPosition` varchar(50) DEFAULT NULL COMMENT '水印位置，在中间(center)或者在底部(bottom)，1688无需关注此字段，1688的水印信息在上传图片时处理',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='商品-商品主图';

-- ----------------------------
-- Records of ai_product_image
-- ----------------------------

-- ----------------------------
-- Table structure for `ai_product_saleinfo`
-- ----------------------------
DROP TABLE IF EXISTS `ai_product_saleinfo`;
CREATE TABLE `ai_product_saleinfo` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `productID` bigint(20) DEFAULT NULL COMMENT '商品ID',
  `supportOnlineTrade` varchar(10) DEFAULT NULL COMMENT '是否支持网上交易。true：支持 false：不支持，国际站不需关注此字段',
  `mixWholeSale` varchar(10) DEFAULT NULL COMMENT '是否支持混批，国际站无需关注此字段',
  `saleType` varchar(50) DEFAULT NULL COMMENT '销售方式，按件卖(normal)或者按批卖(batch)，1688站点无需关注此字段',
  `priceAuth` varchar(10) DEFAULT NULL COMMENT '是否价格私密信息，国际站无需关注此字段',
  `amountOnSale` double DEFAULT NULL COMMENT '可售数量，国际站无需关注此字段',
  `unit` varchar(100) DEFAULT NULL,
  `minOrderQuantity` bigint(20) DEFAULT NULL COMMENT '最小起订量，范围是1-99999。1688无需处理此字段	',
  `batchNumber` bigint(20) DEFAULT NULL COMMENT '每批数量',
  `retailprice` double DEFAULT NULL COMMENT '建议零售价，国际站无需关注',
  `tax` varchar(100) DEFAULT NULL COMMENT '税率相关信息，内容由用户自定，国际站无需关注',
  `sellunit` varchar(100) DEFAULT NULL COMMENT '售卖单位，如果为批量售卖，代表售卖的单位，例如1"手"=12“件"的"手"，国际站无需关注',
  `quoteType` bigint(20) DEFAULT NULL COMMENT '普通报价-FIXED_PRICE("0"),SKU规格报价-SKU_PRICE("1"),SKU区间报价（商品维度）-SKU_PRICE_RANGE_FOR_OFFER("2"),SKU区间报价（SKU维度）-SKU_PRICE_RANGE("3")，国际站无需关注',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='商品-销售信息';

-- ----------------------------
-- Records of ai_product_saleinfo
-- ----------------------------

-- ----------------------------
-- Table structure for `ai_product_saleinfo_pricerange`
-- ----------------------------
DROP TABLE IF EXISTS `ai_product_saleinfo_pricerange`;
CREATE TABLE `ai_product_saleinfo_pricerange` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `productID` bigint(20) DEFAULT NULL COMMENT '商品ID',
  `startQuantity` bigint(20) DEFAULT NULL,
  `price` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='商品-销售信息-区间价格';

-- ----------------------------
-- Records of ai_product_saleinfo_pricerange
-- ----------------------------

-- ----------------------------
-- Table structure for `ai_product_shippinginfo`
-- ----------------------------
DROP TABLE IF EXISTS `ai_product_shippinginfo`;
CREATE TABLE `ai_product_shippinginfo` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `productID` bigint(20) DEFAULT NULL COMMENT '商品ID',
  `freightTemplateID` bigint(20) DEFAULT NULL COMMENT '运费模板ID，1688使用两类特殊模板来标明使用：运费说明、 卖家承担运费的情况。此参数通过调用运费模板相关API获取',
  `unitWeight` double DEFAULT NULL COMMENT '单位重量',
  `packageSize` varchar(100) DEFAULT NULL COMMENT '尺寸，单位是厘米，长宽高范围是1-9999999。1688无需关注此字段',
  `volume` bigint(20) DEFAULT NULL COMMENT '体积，单位是立方厘米，范围是1-9999999，1688无需关注此字段',
  `handlingTime` bigint(20) DEFAULT NULL COMMENT '备货期，单位是天，范围是1-60。1688无需处理此字段',
  `sendGoodsAddressId` bigint(20) DEFAULT NULL COMMENT '发货地址ID，国际站无需处理此字段',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='商品-物流信息';

-- ----------------------------
-- Records of ai_product_shippinginfo
-- ----------------------------

-- ----------------------------
-- Table structure for `ai_product_sku`
-- ----------------------------
DROP TABLE IF EXISTS `ai_product_sku`;
CREATE TABLE `ai_product_sku` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `productID` bigint(20) DEFAULT NULL COMMENT '商品ID',
  `skuCode` varchar(100) DEFAULT NULL COMMENT '商品编码，1688无需关注',
  `skuId` bigint(20) DEFAULT NULL COMMENT 'skuId',
  `specId` varchar(50) DEFAULT NULL COMMENT 'specId, 国际站无需关注',
  `price` double DEFAULT NULL COMMENT '报价时该规格的单价，国际站注意要点：含有SKU属性的在线批发产品设定具体价格时使用此值，若设置阶梯价格则使用priceRange',
  `cargoNumber` varchar(200) DEFAULT NULL COMMENT '指定规格的货号，国际站无需关注',
  `amountOnSale` bigint(20) DEFAULT NULL COMMENT '可销售数量，国际站无需关注',
  ` retailPrice` double DEFAULT NULL COMMENT '建议零售价，国际站无需关注',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='商品-sku信息';

-- ----------------------------
-- Records of ai_product_sku
-- ----------------------------

-- ----------------------------
-- Table structure for `ai_product_sku_attr`
-- ----------------------------
DROP TABLE IF EXISTS `ai_product_sku_attr`;
CREATE TABLE `ai_product_sku_attr` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `productID` bigint(20) DEFAULT NULL COMMENT '商品ID',
  `skuCode` varchar(100) DEFAULT NULL COMMENT '商品编码，1688无需关注',
  `skuId` bigint(20) DEFAULT NULL COMMENT 'skuId',
  `attributeID` bigint(20) DEFAULT NULL COMMENT 'sku属性ID',
  `attValueID` bigint(20) DEFAULT NULL COMMENT 'sku值ID，1688不用关注',
  `attributeValue` varchar(200) DEFAULT NULL COMMENT 'sku值内容，国际站不用关注',
  `customValueName` varchar(200) DEFAULT NULL COMMENT '自定义属性值名称，1688无需关注',
  `skuImageUrl` varchar(500) DEFAULT NULL COMMENT 'sku图片',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='商品-sku信息-sku属性值';

-- ----------------------------
-- Records of ai_product_sku_attr
-- ----------------------------

-- ----------------------------
-- Table structure for `ai_product_sku_pricerange`
-- ----------------------------
DROP TABLE IF EXISTS `ai_product_sku_pricerange`;
CREATE TABLE `ai_product_sku_pricerange` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `productID` bigint(20) DEFAULT NULL COMMENT '商品ID',
  `skuCode` varchar(100) DEFAULT NULL COMMENT '商品编码，1688无需关注',
  `skuId` bigint(20) DEFAULT NULL COMMENT 'skuId',
  `startQuantity` bigint(20) DEFAULT NULL,
  `price` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='商品-sku信息-sku阶梯报价';

-- ----------------------------
-- Records of ai_product_sku_pricerange
-- ----------------------------
