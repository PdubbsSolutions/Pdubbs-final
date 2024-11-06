const mongoose = require('mongoose');
const bcrypt = require('bcrypt');

const UserSchema = new mongoose.Schema({
   username: {
      type: String,
      required: true,
      unique: true,
      minLength: 6
   },
   email: {
      type: String,
      required: true,
      unique: true,
      match: /.+\@.+\..+/
   },
   password: {
      type: String,
      required: true
   }
});

UserSchema.pre('save', async function(next) {
   try {
      if (!this.isModified('password')) return next(); 
      const hashed = await bcrypt.hash(this.password, 10);
      this.password = hashed;
      next();
   } catch (err) {
      next (err);
   }
});

UserSchema.methods.comparePassword = function (candidatePassword) {
   return bcrypt.compare(candidatePassword, this.password);
};
module.exports = mongoose.modle('User', UserSchema);