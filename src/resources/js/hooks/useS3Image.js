// ref関数をインポートしている
import AWS from 'aws-sdk';

const s3 = new AWS.S3({
    accessKeyId: 'hoge',
    secretAccessKey: 'hoge',
    region: 'ap-northeast-1'
})

export const getImageFromS3 = async (bucketName, key) => {
    // S3から画像を取得するロジック
    const params = {
        Bucket: bucketName,
        Key: key
      }
      const { Body } = await s3.getObject(params).promise()
      return URL.createObjectURL(new Blob([Body]))
}