const express = require('express');
var nodemailer = require('nodemailer');
const app = express();
app.use(express.static(__dirname));
const server = require('http').createServer(app);
server.listen(8082, function () {
  console.log('Server listening at port %d', 8082);
});
var transporter = nodemailer.createTransport({
  service: 'qq',
  port: 465, // SMTP 端口
  secureConnection: true, // 使用 SSL
  auth: {
      user: '1079688386@qq.com',
      //这里密码不是qq密码，是你设置的smtp密码
      pass: 'cvzouyakkzxcgfia'
  }
});
const io = require('socket.io')(server);
io.on('connection', socket => {
  socket.on('product', data => {
    let obj = data[0];
    console.log(obj);
    var mailOptions = {
        from: '1079688386@qq.com', // 发件地址
        to: '1746917581@qq.com', // 收件列表
        subject: '订单详情', // 标题
        //text和html两者只支持一种
        text:  `订单消息：姓名：${obj.name},邮箱：${obj.email}，产品：${obj.product}地区：${obj.selectCity + obj.selectCity1 + obj.selectCity2},详细地址：${obj.areaDetail}，留言：${obj.words}`, // 标题
    };
    
    // // send mail with defined transport object
    transporter.sendMail(mailOptions, function(error, info){
        if(error){
            return console.log(error);
        }
        console.log('Message sent: ' + info.response);
    
    });
// test2 branch
    var mailOptions2 = {
      from: '1079688386@qq.com', // 发件地址
      to: obj.email, // 收件列表
      subject: '订单详情', // 标题
      //text和html两者只支持一种
      text:  `尊敬的${obj.name},您的订单已发送成功`, // 标题
    };
    transporter.sendMail(mailOptions2, function(error, info){
        if(error){
            return console.log(error);
        }
        console.log('Message sent: ' + info.response);

    });
  });
});